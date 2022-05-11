<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;

/* RouteServiceProvider */

Route::get('admin', [AdminController::class, 'Admin'])->name('admin');
Route::get('admin/news', [AdminController::class, 'AdminNews'])->name('admin_news');
Route::get('admin/news/{ARTICLE_NAME}', [AdminController::class, 'AdminNewsEdit'])->name('admin_news_edit');
Route::get('admin/board', [AdminController::class, 'AdminNews'])->name('admin_board');
Route::get('admin/board/{ARTICLE_NAME}', [AdminController::class, 'AdminNewsEdit'])->name('admin_board_edit');

Route::get('home', [HomeController::class, 'Home'])->name('home');
Route::get('home/language/{LANGUAGE}', [HomeController::class, 'Language'])->name('home_language');

Route::get('about', [AboutController::class, 'About'])->name('about');

Route::get('projects', [ProjectsController::class, 'Projects'])->name('projects');
Route::get('projects/{PROJECT_NAME}', [ProjectsController::class, 'TargetProject'])->name('projects_target');

Route::get('board', [BoardController::class, 'Board'])->name('board');
Route::get('board/{ARTICLE_NAME}', [BoardController::class, 'Board'])->name('board_object');

Route::get('news', [NewsController::class, 'News'])->name('news');
Route::get('news/{ARTICLE_URL_NAME}', [NewsController::class, 'NewsArticle'])->name('news_article');
Route::get('news/word/{KEYWORD}', [NewsController::class, 'NewsKeyword'])->name('news_keyword');

Route::redirect('/', 'home');
