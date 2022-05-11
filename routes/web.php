<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\NewsController;

/* RouteServiceProvider */

Route::get('admin', [AdminController::class, 'Admin'])->name('admin');

Route::get('home', [HomeController::class, 'Home'])->name('home');

Route::get('projects', [ProjectsController::class, 'Projects'])->name('projects');

Route::get('board', [BoardController::class, 'Board'])->name('board');

Route::get('news', [NewsController::class, 'News'])->name('news');

Route::get('news/article/{title}', function ($title = 'null') {
    return view('@news_article@');
})->name('article');

Route::get('news/keyword/{keyword}', function ($keyword = 'null') {
    return view('@news_keyword@');
})->name('keywords');

Route::view('/about', 'about', ['title' => 'About me - Henry Alexis',
                                            'navbar' => 'about',
                                            'og_description' => 'Portfolio Henry Alexis - About me'])->name('about');

Route::redirect('/', 'home');
