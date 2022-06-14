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
Route::post('/', [HomeController::class, 'Home'])->name('home.contact');
Route::get('about', [AboutController::class, 'About'])->name('about');
Route::get('projects', [ProjectsController::class, 'Projects'])->name('projects');
Route::get('projects/{name}', [ProjectsController::class, 'TargetProject'])->name('projects.target');
Route::get('resources', [BoardController::class, 'Board'])->name('board');
Route::get('news', [NewsController::class, 'News'])->name('news');
Route::get('news/{url}', [NewsController::class, 'NewsArticle'])->name('news.article');
Route::get('news/word/{key}', [NewsController::class, 'NewsKeyword'])->name('news.keyword');
Route::get('language', [LanguagesController::class, 'ShowLanguageList'])->name('language');
Route::get('language/{lang}', [LanguagesController::class, 'WikipediaDefinition'])->name('language.lang');
Route::get('login', [AdminController::class, 'Login'])->name('login');
Route::redirect('home', '/');

// Routes to auth views

Route::middleware(Administrator::class)->group(function() {
    Route::post('admin', [AdminController::class, 'Dashboard'])->name('admin.dashboard');
    Route::post('admin/projects', [AdminController::class, 'Projects'])->name('admin.projects');
    Route::post('admin/projects/{id}', [AdminController::class, 'ProjectsEditing'])->name('admin.projects.editing');
    Route::post('admin/news', [AdminController::class, 'News'])->name('admin.news');
    Route::post('admin/news/{id}', [AdminController::class, 'NewsEditing'])->name('admin.news.editing');
    Route::post('admin/resources', [AdminController::class, 'Board'])->name('admin.board');
    Route::post('admin/resources/{id}', [AdminController::class, 'BoardEditing'])->name('admin.board.editing');
    Route::get('admin/laravel', [AdminController::class, 'Laravel'])->name('laravel.welcome');
    Route::get('admin/php', [AdminController::class, 'Environment'])->name('phpinfo');
});