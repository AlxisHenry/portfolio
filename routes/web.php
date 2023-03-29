<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LegalNoticeController;
use App\Http\Controllers\LocalizationController;
use DebugBar\DataCollector\LocalizationCollector;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('about')->group(
    function () {
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
    }
);

Route::prefix('resources')->group(
    function () {
        Route::get('/', [ResourceController::class, 'index'])->name('resource.index');
    }
);

Route::prefix('projects')->group(
    function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
    }
);

Route::prefix('news')->group(
    function () {
        Route::get('/', [NewsController::class, 'index'])->name('news');
        Route::get('/{url}', [NewsController::class, 'show'])->name('news.article');
        Route::get('/search/{key}', [NewsController::class, 'search'])->name('news.search');
    }
);

Route::prefix('languages')->group(
    function () {
        Route::get('/', [LanguageController::class, 'index'])->name('languages.index');
        Route::get('/{name}', [LanguageController::class, 'show'])->name('languages.show');
    }
);

Route::prefix('contact')->group(
    function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        Route::post('/', [ContactController::class, 'send'])->name('contact.send');
    }
);

Route::get('legal-notice', [LegalNoticeController::class, 'index'])->name('legal-notice.index');

Route::get('lang/{locale}', [LocalizationController::class, 'setLocale'])->name('lang');

/**
 * Redirections
 */
Route::redirect('home', '/');
Route::redirect('login', '/admin/login')->name("login");