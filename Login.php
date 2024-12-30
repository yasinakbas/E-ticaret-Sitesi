<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('tema/header')
            . view('sayfalar/giris')
            . view('tema/footer');
    }
}
