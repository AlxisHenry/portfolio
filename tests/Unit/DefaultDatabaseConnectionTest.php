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
    public function test_check_if_user_data_exist()
    {
        $user = User::where('user_id', 1)->first ();
        $this->assertSame('admin', $user->username);
    }
}
