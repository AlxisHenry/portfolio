<?php

use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Middleware\Administrator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/* RouteServiceProvider */

// Routes to globals views

Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('about', [AboutController::class, 'About'])->name('about');
Route::get('projects', [ProjectsController::class, 'Projects'])->name('projects');
Route::get('projects/{name}', [ProjectsController::class, 'TargetProject'])->name('projects_target');
Route::get('board', [BoardController::class, 'Board'])->name('board');
Route::get('board/{name}', [BoardController::class, 'Board'])->name('board_object');
Route::get('news', [NewsController::class, 'News'])->name('news');
Route::get('news/{url}', [NewsController::class, 'NewsArticle'])->name('news_article');
Route::get('news/word/{key}', [NewsController::class, 'NewsKeyword'])->name('news_keyword');
Route::get('language', [LanguagesController::class, 'ShowLanguageList'])->name('language');
Route::get('language/{lang}', [LanguagesController::class, 'WikipediaDefinition'])->name('language_lang');
Route::get('login', [AdminController::class, 'Login'])->name('login');
Route::redirect('home', '/');

// Routes to auth views

Route::middleware(Administrator::class)->group(function() {
    Route::post('admin', [AdminController::class, 'Dashboard'])->name('admin_post');
    Route::post('admin/news', [AdminController::class, 'News'])->name('admin_news');
    Route::post('admin/news/{id}', [AdminController::class, 'NewsEditing'])->name('admin_news_edit');
    Route::post('admin/board', [AdminController::class, 'Board'])->name('admin_board');
    Route::post('admin/board/{id}', [AdminController::class, 'BoardEditing'])->name('admin_board_edit');
    Route::post('admin/laravel', [AdminController::class, 'Laravel'])->name('laravel_welcome');
    Route::post('admin/php', [AdminController::class, 'Environment'])->name('laravel_welcome');
});

// Testing routes

Route::view('/test/downloads', 'test');