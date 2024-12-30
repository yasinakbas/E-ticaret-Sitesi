<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && $user['password'] === $password) {
                session()->set('isLoggedIn', true);
                return redirect()->to(base_url('admin'));

            } else {
                return view('login', ['error' => 'Geçersiz kullanıcı adı veya şifre.']);
            }
        }

        return view('/sayfalar/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/sayfalar/login');
    }
}
