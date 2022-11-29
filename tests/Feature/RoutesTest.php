<?php

namespace Tests\Feature;

use App\Models\News;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_homepage_screen_can_be_rendered()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_me_screen_can_be_rendered()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_resources_screen_can_be_rendered()
    {
        $response = $this->get('/resources');
        $response->assertStatus(200);
    }

    public function test_news_screen_can_be_rendered()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }

    public function test_news_show_screen_can_be_rendered()
    {
        $target_news = News::first();
        $response = $this->get('/news/'.explode('/', $target_news->UrlArticle)[array_key_last(explode('/', $target_news->UrlArticle))]);
        $response->assertStatus(200);
    }

    public function test_projects_screen_can_be_rendered()
    {
        $response = $this->get('/projects');
        $response->assertStatus(200);
    }

    public function test_languages_screen_can_be_rendered()
    {
        $response = $this->get('/language');
        $response->assertStatus(200);
    }

    public function test_languages_show_screen_can_be_rendered()
    {
        $response = $this->get('/language/css');
        $response->assertStatus(200);
    }

    public function test_login_screen_can_be_rendered() {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
}
