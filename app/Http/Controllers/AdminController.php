<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
    }

    public function Admin() {
        return 'Admin';
    }

    public function AdminNews() {
        return 'AdminNews';
    }

    public function AdminNewsEdit() {
        return 'AdminNewsEdit';
    }

    public function AdminBoard() {
        return 'AdminBoard';
    }

    public function AdminBoardEdit() {
        return 'AdminBoardEdit';
    }

    public function LaravelWelcome() {
        return view('welcome');
    }

}
