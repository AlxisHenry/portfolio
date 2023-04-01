<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\News;
use App\Models\Project;
use App\Models\Resource;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = -2;

    protected function increase(string $table): array
    {
        $now = now();
        $results = DB::table($table)
            ->select(
                DB::raw('MONTH(created_at) as month'), 
                DB::raw('YEAR(created_at) as year'), 
                DB::raw('count(*) as total')
            )
            ->where('created_at', '>=', $now->subMonths(12)->startOfMonth())
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        
        $d = array_fill(0, 12, 0);
        
        foreach ($results as $result) {
            $index = ($result->year - $now->year) * 12 + ($result->month - $now->month);
            $d[$index] = $result->total;
        }

        return $d;
    }

    protected function createdThisMonth(string $table): int
    {
        return DB::table($table)
            ->whereMonth('created_at', (string) now()->month)
            ->whereYear('created_at', (string) now()->year)
            ->count();
    }

    protected function statsCards(array $tables): array
    {
        $cards = [];
        foreach ($tables as $table) {
            $cards[] = Card::make(ucfirst($table), DB::table($table)->count())
                        ->icon('heroicon-o-inbox')
                        ->chart($this->increase($table))
                        ->chartColor($this->createdThisMonth($table) === 0 ? 'primary' : 'success')
                        ->description('+' .  ($this->createdThisMonth($table) === 0 ? '0' : $this->createdThisMonth($table)) . ' this month')
                        ->descriptionIcon('heroicon-s-' . ($this->createdThisMonth($table) === 0 ? 'dots-horizontal' : 'trending-up'))
                        ->descriptionColor($this->createdThisMonth($table) === 0 ? 'primary' : 'success')
                        ->color('primary');
        }
        return $cards;
    }

    protected function getCards(): array
    {   
        return $this->statsCards([
            'contacts',
            'news',
            'projects',
            'resources',
            'experiences',
            'hobbies',
        ]);
    }
    
}
