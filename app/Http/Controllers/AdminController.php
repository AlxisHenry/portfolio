<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\News;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Nette\Schema\Schema;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{

    public function __construct()
    {
    }

    public function Login(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
            return view('templates.login',
                [
                    'title' => 'Login - Administration',
                    'navbar' => 'Login - Administration',
                    'status' => true
                ]);
    }

    public function View(string $view, Request $request)
    {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $request->input('username');
            $password = $request->input('password');
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
            $all = Projects::all();
        } else {
            return abort('404');
        }

        if (Auth::attempt($users)) {
            Session::remove('connect');
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
            Session::put('connect', false);
            return back();
        }

    }

    public function Action(string $view, int $id, string $action, Request $request)
    {
        $target = null;
        $delete_status = false;
        $callback_message_status = false;

        switch ($view) {
            case 'news':
                $target = News::byid($id);
                break;
            case 'projects':
                $target = Projects::byid($id);
                break;
            case 'resources':
                $target = Board::byid($id);
                break;
            default:
                return abort('404');
        }

        $data = $target->get();

        if ($action === "delete") {
            $target->delete();
            $delete_status = true;
        }

        if ($action === 'edit') {

            if(isset($_POST['type_action']) && isset($_POST['type_object'])) {

                if(isset($_POST['identifier'])) {
                    $type_object = $request->input('type_object');
                    $data_obj = null;
                    switch ($type_object) {
                        case 'news':
                            $data_obj = News::find($id);
                            $data_obj->introduction = $request->input('introduction');
                            $data_obj->UrlArticle = $request->input('link_news');
                            $data_obj->LinkImage = $request->input('link_img');
                            $data_obj->Theme = $request->input('themes');
                            $data_obj->ThemePrincipal = $request->input('theme_principal');
                            break;
                        case 'projects':
                            $data_obj = Projects::find($id);
                            $data_obj->description = $request->input('description');
                            $data_obj->GithubLink = $request->input('github_link');
                            $data_obj->languages = $request->input('languages');
                            $data_obj->linkImage = $request->input('link_img');
                            $data_obj->url_name = $request->input('url_name');
                            break;
                        case 'resources':
                            $data_obj = Board::find($id);
                            $data_obj->documentationLink = $request->input('documentation');
                            $data_obj->description = $request->input('description');
                            break;
                    }

                    $data_obj->title = $request->input('title');
                    $data_obj->author = $request->input('author');
                    $data_obj->save();
                    $callback_message_status = true;

                }

            }

        }

        return view('templates.admin.admin-action',
            [
                'title' => ucfirst($action) . ' ' . ucfirst($view) .' - Administration',
                'view' =>   $view,
                'action' => $action,
                'targets' => null,
                'id_target' => $id,
                'data_target' => $data,
                'delete_status' => $delete_status,
                'callback_message_status' => $callback_message_status
            ]);
    }

    public function New(string $view, Request $request) {

        $edited_status = false;
        $callback_message_status = false;
        if ($request->input('type_object') && $request->input('type_action')) {
            $type_object = $request->input('type_object');
            $type_action = $request->input('type_action');

            if ($type_action === 'new') {

                $title = $request->input('title');
                $author = $request->input('author');
                $published_at = $request->input('published_at');

                switch ($type_object) {
                    case 'news':
                        $link_news = $request->input('link_news');
                        $link_img = $request->input('link_img');
                        $themes = $request->input('themes');
                            $theme_principal = $request->input('theme_principal');
                            $introduction = $request->input('introduction');

                            News::create([
                            'title' => $title,
                            'author' => $author,
                            'introduction' => $introduction,
                            'UrlArticle' => $link_news,
                            'LinkImage' => $link_img,
                            'Theme' => $themes,
                            'ThemePrincipal' => $theme_principal,
                            'published_at' => $published_at
                        ]);

                        break;
                    case 'resources':
                        $documentation = $request->input('documentation');
                        $description = $request->input('description');

                        Board::create([
                            'title' => $title,
                            'author' => $author,
                            'description' => $description,
                            'documentationLink' => $documentation,
                            'published_at' => $published_at,
                            'edit_at' => $published_at
                        ]);
                        break;
                    case 'projects':
                        $description = $request->input('description');
                        $url_name = $request->input('url_name');
                        $github_link = $request->input('github_link');
                        $link_img = $request->input('link_img');
                        $languages = $request->input('languages');

                        Projects::create([
                            'title' => $title,
                            'url_name' => $url_name,
                            'description' => $description,
                            'author' => $author,
                            'documentationLink' => null,
                            'GithubLink' => $github_link,
                            'linkImage' => $link_img,
                            'languages' => $languages,
                            'published_at' => $published_at,
                            'edit_at' => $published_at
                        ]);
                        break;
                }

            }

        }

        return view('templates.admin.admin-action',
            [
                'title' => 'New ' . ucfirst($view) .' - Administration',
                'view' =>   $view,
                'action' => null,
                'targets' => null,
                'id_target' => null,
                'data_target' => null,
                'delete_status' => null,
                'callback_message_status' => $callback_message_status
            ]);

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
