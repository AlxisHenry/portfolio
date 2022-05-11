<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
    }

    public function Admin() {
        return 'Admin';
    }

    public function AdminNews() {

    }

    public function AdminNewsEdit() {

    }

    public function AdminBoard() {

    }

    public function AdminBoardEdit() {

    }

    public function LaravelWelcome() {

        return view('%welcome%');

    }

}
