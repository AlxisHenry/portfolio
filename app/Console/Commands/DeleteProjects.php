<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:projects {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a project by specifying an id';

    /**
     * Execute the console command.
     *
     * @return bool
     *
     */
    public function handle()
    {
        $project_to_delete = Projects::find($this->argument()['id']);

        if(!$project_to_delete){
            echo "\n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\e[1;41m      The specified id does not exist      \e[0m \n";
            echo "\e[1;41m                                           \e[0m \n";
            echo "\n";
            return false;
        }

        $project_to_delete->delete();

        echo "\n";
        echo "\e[1;42m                                                        \e[0m\n";
        echo "\e[1;42m    An element from App\Models\Projects was deleted.    \e[0m\n";
        echo "\e[1;42m                                                        \e[0m\n";
        echo "\n";
        echo "\e[1;33m  Element #".$this->argument()['id']." was deleted from Projects\e[0m\n ";
        echo "\n";

        return true;

    }
}
