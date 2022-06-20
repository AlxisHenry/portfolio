<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\News;
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
            return view('templates.login',
                ['title' => 'Login - Administration',
                 'navbar' => 'Login - Administration']);
    }

    public function View(string $view): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            Session::put('username', $username);
            Session::put('password', $password);
        } else {
           if(Session::get('username') && Session::get('password')) {
               $username = Session::get('username');
               $password = Session::get('password');
           } else {
               return abort('404');
           }
        }

        $users = [
            'username' => $username,
            'password' => $password
        ];

        $permissions = User::where('username', '=', $username)->get()->toArray();

        if($view === 'news') {
            $all = News::AllTechnology();
        } elseif ($view === 'resources') {
            $all = Board::all();
        } elseif ($view === 'projects') {
            $all = Board::all();
        } else {
            return abort('404');
        }

        if (Auth::attempt($users)) {

            Session::flash('permissions', $permissions[0]['permissions']);
            return view('templates.admin.admin-view',
                    [
                        'title' => ucfirst($view) . ' - Administration',
                        'view' => $view,
                        'action' => null,
                        'targets' => $all,
                        'id_target' => null,
                        'data_target' => null
                    ]);

        } else {
            return view('templates.login',
                ['title' => 'Login - Administration',
                 'navbar' => '',
                 'status' => 'false'
                ]);
        }

    }

    public function Action(string $view, int $id, string $action): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $table = $view;
        $target = '';

        switch ($table) {
            case 'news':
                $target = News::byid($id);
                break;
            case 'projects':
                $target = Board::byid($id);
                break;
            case 'resources':
                $target = Board::byid($id);
                break;
            default:
                return abort('404');
        }

        return view('templates.admin.admin-action',
            [
                'title' => ucfirst($action) . ' ' . ucfirst($view) .' - Administration',
                'view' => $view,
                'action' => $action,
                'targets' => null,
                'id_target' => $id,
                'data_target' => $target
            ]);
    }

    public function New(string $view) {
        return "Hello World";
    }

    public function Laravel(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

    public function Environment(): bool
    {
        return phpinfo();
    }

}
