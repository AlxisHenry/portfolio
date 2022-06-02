<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{

    public function __construct()
    {
    }

    public function Login(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.admin.login', ['title' => 'Login - Administration']);
    }

    public function Admin(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        } else {
            return view('templates.admin.login', ['title' => 'Login - Administration', 'status' => false]);
        }

        $users = [
            'username' => $username,
            'password' => $password
        ];

        $permissions = User::where('username', '=', $username)->get()->toArray();

        if (Auth::attempt($users)) {
            Session::flash('permissions', $permissions[0]['permissions']);
            return view('templates.admin.dashboard', ['title' => 'Dashboard - Administration', 'status' => true]);
        } else {
            return view('templates.admin.login', ['title' => 'Login - Administration', 'status' => false]);
        }

    }

    public function AdminNews(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.admin.news', ['title' => 'News - Administration']);
    }

    public function AdminNewsEdit(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.admin.edit-news', ['title' => 'Edit News - Administration']);
    }

    public function AdminBoard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.admin.board', ['title' => 'Board - Administration']);
    }

    public function AdminBoardEdit(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.admin.edit-board', ['title' => 'Edit Board - Administration']);
    }

    public function LaravelWelcome(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

}
