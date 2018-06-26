<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }
    function store(Request $request){

        $name = $request->name;

     return redirect()->route('thanks',['name' =>$name]);
    }

    function thanks($name)
    {
        return view('pages.thankyou')->with(compact('name'));
    }

    function login()
    {
        return view('pages.login');
    }

    function logout()
    {
        return view('pages.logout');
    }
    function message()
    {
        return view('pages.message');
    }
    function signup()
    {
        return view('pages.signup');
    }
    function viewmessages()
    {
        return view('pages.viewmessages');
    }
}
