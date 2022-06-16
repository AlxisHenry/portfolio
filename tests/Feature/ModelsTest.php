<?php

namespace Tests\Feature;

use App\Models\Board;
use App\Models\News;
use App\Models\User;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_model_board_exist()
    {
        $board = Board::all();
        $this->assertIsIterable($board);
    }

    public function test_model_news_exist()
    {
        $board = News::all();
        $this->assertIsIterable($board);
    }

    public function test_model_user_exist()
    {
        $board = User::all();
        $this->assertIsIterable($board);
    }

}
