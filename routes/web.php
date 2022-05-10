<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/* RouteServiceProvider */

Route::get('laravel/{password}', function ($password) {
    if ($password === 'admin123') {
        return view('%welcome%');
    } else {
        return Redirect::to('home');
    }
})->name('admin');

Route::view('/home',   'homepage', ['title' => 'Home - Henry Alexis',
                                             'navbar' => 'home',
                                             'og_description' => 'Portfolio Henry Alexis - Homepage'])->name('home');

Route::view('/projects', 'projects', ['title' => 'Projects - Henry Alexis',
                                                'navbar' => 'projects',
                                                'og_description' => 'Portfolio Henry Alexis - Projects'])->name('projects');

Route::view('/board', 'board', ['title' => 'Board - Henry Alexis',
                                            'navbar' => 'board',
                                            'og_description' => 'Portfolio Henry Alexis - Board with my articles'])->name('board');

Route::view('/news', '@news@', ['title' => 'News - Henry Alexis',
    'navbar' => 'news',
    'og_description' => 'Portfolio Henry Alexis - News Articles France Inter / CNIL'])->name('news');

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
