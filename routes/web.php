<?php

use Illuminate\Support\Facades\Route;

/* RouteServiceProvider */

Route::view('/home',   'homepage', ['title' => 'Home - Henry Alexis',
                                             'navbar' => 'home',
                                             'og_description' => 'Portfolio Henry Alexis - Homepage']);

Route::view('/projects', 'projects', ['title' => 'Projects - Henry Alexis',
                                                'navbar' => 'projects',
                                                'og_description' => 'Portfolio Henry Alexis - Projects']);

Route::view('/board', 'board', ['title' => 'Board - Henry Alexis',
                                            'navbar' => 'board',
                                            'og_description' => 'Portfolio Henry Alexis - Board Veille Technologique']);

Route::get('board/article/{title}', function ($title = 'null') {
    return view('board_article');
})->name('article');

Route::view('/about', 'about', ['title' => 'About me - Henry Alexis',
                                            'navbar' => 'about',
                                            'og_description' => 'Portfolio Henry Alexis - About me']);

Route::redirect('/', 'home');
