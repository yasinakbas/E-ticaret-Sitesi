<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function index()
    {
        // UserModel ile kullanıcıları alıyoruz
        $userModel = new UserModel();
        $data['users'] = $userModel->getAllUsers();  // Kullanıcıları veritabanından al

        // Admin panelini ve kullanıcıları görüntüle
        return view('admin', $data);  // admin.php dosyasına kullanıcı verileri ile birlikte yönlendirme
    }

    // Yeni kullanıcı ekleme
    public function addUser()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $userModel = new UserModel();
            $data = [
                'username' => $username,
                'password' => $password
            ];

            $userModel->createUser($data);  // Yeni kullanıcı ekle
            return redirect()->to('/admin');  // Admin paneline yönlendir
        }

        return view('admin');  // Kullanıcı ekleme formunu göster
    }

    // Kullanıcı silme
    public function deleteUser($id)
    {
        $userModel = new UserModel();
        $userModel->deleteUser($id);  // Kullanıcıyı sil
        return redirect()->to('/admin');  // Admin paneline yönlendir
    }

    // Kullanıcıyı güncelleme
    public function updateUser($id)
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $userModel = new UserModel();
            $data = [
                'username' => $username,
                'password' => $password
            ];

            $userModel->updateUser($id, $data);  // Kullanıcıyı güncelle
            return redirect()->to('/admin');  // Admin paneline yönlendir
        }

        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);  // Kullanıcıyı al
        return view('edit_user', $data);  // Kullanıcı düzenleme formunu göster
    }
}
