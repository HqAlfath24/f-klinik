<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('home/home');
    }

    public function about()
    {
        // return view('welcome_message');
        return view('home/about');
    }
}
