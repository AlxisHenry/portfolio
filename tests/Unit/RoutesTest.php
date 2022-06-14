<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_home_route_exist()
    {
        $this->assertTrue(Route::has('home'));
    }
    public function test_admin_route_exist()
    {
        $this->assertTrue(Route::has('admin.dashboard'));
    }
    public function test_login_route_exist()
    {
        $this->assertTrue(Route::has('login'));
    }
}
