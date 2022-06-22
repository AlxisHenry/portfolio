<?php

namespace Tests\Feature;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomepageIsWorking()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAboutIsWorking()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function testResourcesIsWorking()
    {
        $response = $this->get('/resources');
        $response->assertStatus(200);
    }

    public function testNewsIsWorking()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }

    public function testTargetNewsIsWorking()
    {
        $target_news = News::first();
        $response = $this->get('/news/'.explode('/', $target_news->UrlArticle)[array_key_last(explode('/', $target_news->UrlArticle))]);
        $response->assertStatus(200);
    }

    public function testProjectsIsWorking()
    {
        $response = $this->get('/projects');
        $response->assertStatus(200);
    }

    public function testTargetProjectsIsWorking()
    {
     //   $target_news = News::first();
     //   $response = $this->get('/news/'.);
     //   $response->assertStatus(200);
    }

    public function testLanguageIsNotFound()
    {
        $response = $this->get('/language');
        $response->assertStatus(404);
    }

    public function testTargetLanguageIsWorking()
    {
        $response = $this->get('/language/js');
        $response->assertStatus(200);
    }

    public function testLoginIsWorking() {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
}
