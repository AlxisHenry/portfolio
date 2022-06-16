<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class DefaultDatabaseConnectionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_environment_database_connection_is_working()
    {
        $user = User::where('user_id', 1)->first();
        $this->assertSame('admin', $user->username);
    }
}
