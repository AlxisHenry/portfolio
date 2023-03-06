<?php

namespace Tests\Feature;

use App\Models\News;
use App\Models\Project;
use App\Models\Resource;
use App\Models\User;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testModelBoardWork()
    {
        $board = Resource::all();
        $this->assertIsIterable($board);
    }

    public function testModelNewsWork()
    {
        $news = News::all();
        $this->assertIsIterable($news);
    }

    public function testModelUsersWork()
    {
        $user = User::all();
        $this->assertIsIterable($user);
    }

    public function testModelProjectsWork()
    {
        $projects = Project::all();
        $this->assertIsIterable($projects);
    }
}
