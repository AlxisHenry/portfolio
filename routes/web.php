<?php

use Illuminate\Support\Facades\Route;

/* RouteServiceProvider */

Route::get('/home', function () {
    return view('homepage', ['title' => 'Home - Henry Alexis',
                                   'navbar' => 'home']);
});

Route::redirect('/', 'home');

Route::view('/about', 'homepage', ['title' => 'About me - Henry Alexis',
                                            'navbar' => 'about']);

Route::view('/projects', 'homepage', ['title' => 'Projects - Henry Alexis',
                                                'navbar' => 'projects']);

Route::view('/board', 'homepage', ['title' => 'Board - Henry Alexis',
                                            'navbar' => 'board']);
