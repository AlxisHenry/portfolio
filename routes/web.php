<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('homepage', ['title' => 'Homepage - Henry Alexis', 'navbar' => 'home']);
});

Route::redirect('/', 'home');

Route::view('/about', 'homepage', ['title' => 'About me - Henry Alexis', 'navbar' => 'about']);

Route::view('/projects', 'homepage', ['title' => 'Projects - Henry Alexis', 'navbar' => 'projects']);

Route::view('/board', 'homepage', ['title' => 'Articles? - Henry Alexis', 'navbar' => 'board']);
