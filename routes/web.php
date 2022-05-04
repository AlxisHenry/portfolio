<?php

use Illuminate\Support\Facades\Route;

/* RouteServiceProvider */

Route::view('/home',   'homepage', ['title' => 'Home - Henry Alexis',
                                             'navbar' => 'home']);

Route::view('/projects', 'projects', ['title' => 'Projects - Henry Alexis',
                                                'navbar' => 'projects']);

Route::view('/board', 'board', ['title' => 'Board - Henry Alexis',
                                            'navbar' => 'board']);

Route::view('/about', 'about', ['title' => 'About me - Henry Alexis',
                                            'navbar' => 'about']);

Route::redirect('/', 'home');
