<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;

class CheckNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of news';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $CountNews = News::count();

        echo "Actually\e[1;33m $CountNews news found\e[0m in database\n ";

    }
}
