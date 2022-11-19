<?php

use Illuminate\Support\Facades\Route;

/**
 * Controllers
 */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\LegalNoticeController;

/**
 * Middlewares
 */
use App\Http\Middleware\ElevatedPermissions;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('about')->group(
    function() {
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
    }
);

Route::prefix('resources')->group(
    function() {
        Route::get('/', [BoardController::class, 'index'])->name('board.index');
    }
);

Route::prefix('projects')->group(
    function() {
        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
    }
);

Route::prefix('news')->group(
    function() {
        Route::get('/', [NewsController::class, 'index'])->name('news');
        Route::get('/{url}', [NewsController::class, 'show'])->name('news.article');
        Route::get('/word/{key}', [NewsController::class, 'keyword'])->name('news.keyword');
    }
);

Route::prefix('language')->group(
    function() {
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

/**
 * Redirections
 */
Route::redirect('home', '/');

/**
 * Authentification
 */
Route::get('login', [AdministrationController::class, 'login'])->name('administration.login.get');
Route::post('login', [AdministrationController::class, 'auth'])->name('administration.login.post');

/**
 * Administration
 */
Route::middleware(ElevatedPermissions::class)->group(
    function() {
        Route::prefix('admin/{view}')->group(
            function() {
                Route::get('/', [AdministrationController::class, 'index'])->name('administration.view');
                Route::get('/new', [AdministrationController::class, 'create'])->name('administration.view.create');
                Route::post('/new', [AdministrationController::class, 'store'])->name('administration.view.store');
                Route::get('/{id}/{action}', [AdministrationController::class, 'show'])->name('administration.view.show');
                Route::post('/{id}/{action}', [AdministrationController::class, 'update'])->name('administration.view.update');
            }
        );
        Route::prefix('admin/server')->group(
            function() {
                Route::get('/laravel', [EnvironmentController::class, 'laravel'])->name('administration.server.laravel');
                Route::get('/phpinfo', [EnvironmentController::class, 'phpinfo'])->name('administration.server.phpinfo');
            }
        );
    }
);