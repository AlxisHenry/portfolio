<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('ip');
    }

    public function Admin() {
        return view('%welcome%');
    }

}
