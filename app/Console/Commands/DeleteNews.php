<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;

class DeleteNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:news {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a news by specifying an id';

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle()
    {

        $news_to_delete = News::find($this->argument()['id']);

        if(!$news_to_delete){
            echo "\n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\e[1;41m      The specified id does not exist      \e[0m \n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\n";
            return false;
        }

        $news_to_delete->delete();

        echo "\n";
        echo "\e[1;42m                                                    \e[0m\n";
        echo "\e[1;42m    An element from App\Models\News was deleted.    \e[0m\n";
        echo "\e[1;42m                                                    \e[0m\n";
        echo "\n";
        echo "\e[1;33m  Element #".$this->argument()['id']." was deleted from News\e[0m\n ";
        echo "\n";

        return true;

    }
}
