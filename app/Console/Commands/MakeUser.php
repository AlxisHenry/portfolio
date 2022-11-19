<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class MakeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user {username} {password} {admin=0}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $password = Hash::make($this->argument()['password']);

        $test_if_user_exist = User::where('username', '=', $this->argument()['username'])->first();

        if ($test_if_user_exist) {
            echo "\n";
            echo "\e[1;41m                                  \e[0m \n";
            echo "\e[1;41m      Username already exist      \e[0m \n";
            echo "\e[1;41m                                  \e[0m \n";
            echo "\n";
            return;
        }

        User::create([
            'username' => $this->argument()['username'],
            'password' => $password,
            'is_admin' => $this->argument()['admin'] ?? 0,
        ]);

        $user = User::where('username', '=' , $this->argument()['username'])->first();

        echo "\n";
        echo "User \e[1;33m". $user->username ."\e[0m successfully created.\n ";
        echo "\n";
    }

}
