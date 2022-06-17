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
    public function test_home_contact_route_exist()
    {
        $this->assertTrue(Route::has('home.contact'));
    }
    public function test_about_route_exist()
    {
        $this->assertTrue(Route::has('about'));
    }
    public function test_projects_route_exist()
    {
        $this->assertTrue(Route::has('projects'));
    }
    public function test_projects_target_route_exist()
    {
        $this->assertTrue(Route::has('projects.target'));
    }
    public function test_resources_route_exist()
    {
        $this->assertTrue(Route::has('board'));
    }
    public function test_news_route_exist()
    {
        $this->assertTrue(Route::has('news'));
    }
    public function test_news_article_route_exist()
    {
        $this->assertTrue(Route::has('news.article'));
    }
    public function test_news_keyword_route_exist()
    {
        $this->assertTrue(Route::has('news.keyword'));
    }
    public function test_language_route_exist()
    {
        $this->assertTrue(Route::has('language'));
    }
    public function test_language_target_route_exist()
    {
        $this->assertTrue(Route::has('language.lang'));
    }
    public function test_login_route_exist()
    {
        $this->assertTrue(Route::has('login'));
    }
    public function test_admin_view_route_exist()
    {
        $this->assertTrue(Route::has('admin.view'));
    }
    public function test_admin_view_new_route_exist()
    {
        $this->assertTrue(Route::has('admin.view.new'));
    }
    public function test_admin_view_action_route_exist()
    {
        $this->assertTrue(Route::has('admin.view.action'));
    }
    public function test_admin_laravel_route_exist()
    {
        $this->assertTrue(Route::has('laravel.welcome'));
    }
    public function test_admin_phpinfo_route_exist()
    {
        $this->assertTrue(Route::has('phpinfo'));
    }
}
