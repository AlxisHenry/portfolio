<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CheckUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of users accounts';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $CountUsers = User::count();

        echo "Actually\e[1;33m $CountUsers user(s) found\e[0m in database\n ";
    }
}
