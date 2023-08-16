<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function header()
    {
        return view('header');
    }

    public function footer()
    {
        return view('footer');
    }
}