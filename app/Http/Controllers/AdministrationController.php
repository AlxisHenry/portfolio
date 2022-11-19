<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Contact;
use App\Models\News;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Alert;
use Illuminate\Support\Facades\Session;

class AdministrationController extends Controller
{

    private string $defaultScreen = "projects";

    private function toScreen(string $tab = null, array $parameters = [])
    {
        return redirect()->route('administration.view', [
            'view' => $tab ?? $this->defaultScreen
        ])->with($parameters);
    }

    public function login()
    {
        if (Auth::check() && Auth::user()->is_admin) 
            return $this->toScreen();
        return view('pages.login', [
            'title' => 'Login - Administration',
            'navbar' => 'Login - Administration',
            'status' => true
        ]);
    }

    public function auth(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password')))
            return $this->toScreen(
                parameters: [
                    'popup' => new Alert('success', 'Login successful', 'You have been logged in successfully.')
                ]
            );
        return back()->with(
            'popup', new Alert('error', 'Login failed', 'Credentials are incorrect.', true)
        );
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('index');
    }

    public function index(string $view)
    {
        $records = [
            'news' => News::all(),
            'projects' => Projects::all(),
            'resources' => Board::all(),
            'contacts' => Contact::all()
        ];
        if (array_key_exists($view, $records))
            return view('pages.admin.admin-view', [
                'title' => ucfirst($view) . ' - Administration',
                'view' => $view,
                'action' => null,
                'targets' => $records[$view],
            ]);   
        return $this->toScreen(
            parameters: [
                'popup' => new Alert('error', 'Page not found', 'The page you are looking for was not found !', true)
            ]
        );
    }

    public function show(string $view, int $id, string $action)
    {
        $records = [
            'news' => News::byid($id)->get(),
            'projects' => Projects::byid($id)->get(),
            'resources' => Board::byid($id)->get(),
            'contacts' => Contact::byid($id)->get()
        ];
        if (array_key_exists($view, $records)) {
            $target = $records[$view];
        } else {
            return $this->toScreen(
                parameters: [
                    'popup' => new Alert('error', 'Record not found', 'We could not find the record...', true)
                ]
            );
        }
        return view('pages.admin.admin-action', [
            'title' => ucfirst($view) . ' - Administration',
            'view' => $view,
            'action' => $action,
            'target' => $target,
        ]);

    }

    private function doUpdate($target, $request)
    {
        switch ($request->input('type_object')) {
            case 'news':
                $target->introduction = $request->input('introduction');
                $target->UrlArticle = $request->input('link_news');
                $target->LinkImage = $request->input('link_img');
                $target->Theme = $request->input('themes');
                $target->ThemePrincipal = $request->input('theme_principal');
                break;
            case 'projects':
                $target->description = $request->input('description');
                $target->GithubLink = $request->input('github_link');
                $target->languages = $request->input('languages');
                $target->linkImage = $request->input('link_img');
                $target->url_name = $request->input('url_name');
                break;
            case 'resources':
                $target->documentationLink = $request->input('documentation');
                $target->description = $request->input('description');
            break;
        }
        $target->title = $request->input('title');
        $target->author = $request->input('author');
        $target->save();
    }

    public function update(string $view, int $id, string $action, Request $request)
    {
        $records = [
            'news' => News::byid($id),
            'projects' => Projects::byid($id),
            'resources' => Board::byid($id),
            'contacts' => Contact::byid($id)
        ];
        $actions = [
            'delete' => function ($target) {
                $target->delete();
            },
            'edit' => function ($target, $request) {
                $this->doUpdate($target->first(), $request);
            }
        ];
        $t = $action === 'delete' ? "deleted" : "edited";
        if (array_key_exists($view, $records) && array_key_exists($action, $actions)) {
            $target = $records[$view];
            $actions[$action]($target, $request);
        } else {
            return $this->toScreen(
                tab: !array_key_exists($view, $records) ?: $view ,
                parameters: [
                    'popup' => new Alert('error', "Action failed : $t", "An error has occurred when $t the record #$id !", true)
                ]
            );
        }
        return $this->toScreen(
            tab: $view,
            parameters: [
                'popup' => new Alert("success", "Record $t", "The ".ucfirst($view)." #$id has been $t successfully !", true)
            ]
        );
    }

    public function create(string $view)
    {   
        return view('pages.admin.admin-action', [
            'title' => ucfirst($view) . ' - Administration',
            'view' => $view,
            'action' => 'new'
        ]);
    }

    public function store(string $view, Request $request) 
    {
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
        return $this->toScreen(tab: $view);
    }
}
