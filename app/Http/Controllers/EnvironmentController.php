<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class EnvironmentController extends Controller
{
    public function laravel(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

    public function phpinfo(): bool
    {
        return phpinfo();
    }
}
