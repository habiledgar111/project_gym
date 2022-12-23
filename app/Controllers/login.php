<?php

namespace App\Controllers;

class login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function header(){
        return view('header');
    }

    public function faqs(){
        return view('faqs');
    }
}
