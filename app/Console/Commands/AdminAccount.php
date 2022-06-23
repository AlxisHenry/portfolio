<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:account {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the admin account informations';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        if (User::find($this->argument()['id'])) {


            $user = User::find($this->argument()['id']);

            echo "\n";
            echo " \e[1;42m                                                          \e[0m \n";
            echo " \e[1;42m      Good news, we found the user in the database !      \e[0m \n";
            echo " \e[1;42m                                                          \e[0m \n";

            echo "\n  ";
            echo "   Username => \e[1;33m ". $user->username ." \e[0m\n  ";
            echo "      Email => \e[1;33m ". $user->email ." \e[0m\n  ";
            echo "   Password => \e[1;33m ". $user->password ." \e[0m\n  ";
            echo "Permissions => \e[1;33m ". $user->permissions ." \e[0m\n ";
            echo "  Created at => \e[1;33m ". $user->created_at ." \e[0m\n ";
            echo "   Edited at => \e[1;33m ". $user->edit_at ." \e[0m\n ";
            echo "\n";

        } else {

            echo "\e[1;41m                                          \e[0m \n";
            echo "\e[1;41m      Specified user doesn't exist...     \e[0m \n";
            echo "\e[1;41m                                          \e[0m \n";

        }

    }
}
