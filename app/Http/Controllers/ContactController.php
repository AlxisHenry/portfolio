<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;
use App\Mail\ContactMailable;
use Illuminate\Http\RedirectResponse;
use App\Helpers\Rand;

class ContactController extends Controller
{

    public function index(): \Illuminate\View\View
    {
        return view('pages.contact', [
            'title' => 'Contact - HENRY ALEXIS',
            'navbar' => '',
            'og_description' => 'Portfolio - HENRY ALEXIS - Contact',
            'random_number' => Rand::int(1, 10)
        ]);
    }

    /**
     * @param Request $request
     */
    public function send(Request $request): RedirectResponse
    {
        $robot = $request->input('random_number');
        $validate = Validator::make($request->all(), [
            'name' => 'required|between:2,60|alpha',
            'email' => 'required|email',
            'object' => 'required|max:255',
            'content' => 'required|max:800',
            'verification' => 'required|between:'.$robot.','.$robot.'|int'
        ]);
        $credentials = $request->all();
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput()->with('scroll', true)->with(compact('credentials'));
        }
        Contact::create($credentials);
        Mail::to(env('MAIL_OWNER'))->queue(new ContactMailable($request->all()));
        return redirect()->back()->with('success', true)->with('scroll', true);
    }

}
