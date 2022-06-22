<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DefaultDatabaseConnectionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCheckEnvDatabaseConfiguration()
    {
        $this->assertNotEmpty(DB::connection()->getDatabaseName());
    }

    public function testCheckIfAdminUsersExist()
    {
        $user = User::count();
        $this->assertNotNull($user);
    }

}
