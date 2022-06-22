<?php

namespace App\Console\Commands;

use App\Models\Board;
use Illuminate\Console\Command;

class CheckResources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:resources';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of resources.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $CountResources = Board::count();

        echo "\n";
        echo "Actually\e[1;33m $CountResources resources found\e[0m in database\n ";
        echo "\n";

    }
}
