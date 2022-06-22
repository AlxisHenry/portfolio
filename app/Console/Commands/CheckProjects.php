<?php

namespace App\Console\Commands;

use App\Models\Projects;
use Illuminate\Console\Command;

class CheckProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:projects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of projects';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $CountProjects = Projects::count();

        echo "\n";
        echo "Actually\e[1;33m $CountProjects resources found\e[0m in database\n ";
        echo "\n";

    }
}
