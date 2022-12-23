<?php

namespace App\Controllers;

class login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function home(){
        return view('home');
    }

    public function faqs(){
        return view('faqs');
    }

    public function home_admin(){
        return view ('home_admin');
    }
}
