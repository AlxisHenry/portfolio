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
    return view('homepage', ['title' => 'Homepage - Henry Alexis']);
});

Route::redirect('/', 'home');

Route::view('/about', 'about', ['title' => 'About me - Henry Alexis']);

Route::redirect('/aboutme', 'about');

Route::view('/projects', 'projects', ['title' => 'Projects - Henry Alexis']);

Route::redirect('/myprojects', 'projects');

Route::view('/articles', 'veille', ['title' => 'Articles? - Henry Alexis']);

Route::view('/veille', 'articles', ['title' => 'Articles? - Henry Alexis']);

Route::view('/veilletechnologique', 'articles', ['title' => 'Articles? - Henry Alexis']);
