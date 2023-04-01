<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class NewsCreatedChart extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected static ?string $pollingInterval = '4s';

    protected function getHeading(): string
    {
        return 'News created';
    }

    protected function getFilters(): ?array
    {
        return [
            'year' => 'This year',
            'week' => 'This week',
            'all' => '5 years ago',
        ];
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;

        if ($activeFilter === 'all') {
            $data = Trend::model(News::class)
                ->between(
                    start: now()->subYears(5)->startOfYear(),
                    end: now()->endOfYear(),
                )
                ->perYear()
                ->count();
        } else if ($activeFilter === 'week') {
            $data = Trend::model(News::class)
                ->between(
                    start: now()->startOfWeek(),
                    end: now()->endOfWeek(),
                )
                ->perDay()
                ->count();
        } else {
            $data = Trend::model(News::class)
                ->between(
                    start: now()->startOfYear(),
                    end: now()->endOfYear(),
                )
                ->perMonth()
                ->count();
        }


        return [
            'datasets' => [
                [
                    'label' => 'News',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
