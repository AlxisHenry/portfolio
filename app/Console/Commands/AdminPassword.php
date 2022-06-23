<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:pwd {id} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change the password of an account';

    /**
     * Execute the console command.
     *
     * @return bool
     */
    public function handle()
    {

        if (strlen($this->argument()['password']) < 6) {
            echo "\n";
            echo "\e[1;41m                                                             \e[0m \n";
            echo "\e[1;41m      The password does not meet the required security.      \e[0m \n";
            echo "\e[1;41m                                                             \e[0m \n";
            echo "\n";
            echo "\e[1;33m Minimum length is 5 characters... \e[0m\n ";
            echo "\n";
            return false;
        }

        $user_to_edit = User::find($this->argument()['id']);
        $hashed_password = Hash::make($this->argument()['password']);

        $user_to_edit->password = $hashed_password;

        $user_to_edit->save();

        echo "\n";
        echo "\e[1;42m                                       \e[0m \n";
        echo "\e[1;42m      Password has been changed !      \e[0m \n";
        echo "\e[1;42m                                       \e[0m \n";

        echo "\n";
        echo "New password => \e[1;33m ". $this->argument()['password'] ." \e[0m\n ";
        echo "\n";

        return true;
    }
}

