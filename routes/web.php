<?php

use Illuminate\Support\Facades\Route;

/* RouteServiceProvider */

Route::view('/home',   'homepage', ['title' => 'Home - Henry Alexis',
                                             'navbar' => 'home',
                                             'next' => 'projects', 'back' => 'none']);

Route::view('/projects', 'projects', ['title' => 'Projects - Henry Alexis',
                                                'navbar' => 'projects',
                                                'next' => 'board', 'back' => 'home']);

Route::view('/board', 'board', ['title' => 'Board - Henry Alexis',
                                            'navbar' => 'board',
                                            'next' => 'about', 'back' => 'projects']);

Route::view('/about', 'about', ['title' => 'About me - Henry Alexis',
                                            'navbar' => 'about',
                                            'next' => 'none', 'back' => 'board']);

Route::redirect('/', 'home');
