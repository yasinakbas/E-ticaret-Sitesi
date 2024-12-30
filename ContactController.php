<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use MongoDB\Client;

class ContactController extends Controller
{
    public function index()
    {
        // İletişim sayfasını yükler
        return view('sayfalar/iletisim');
    }

    public function submitContact()
{
    $mongoClient = new Client("mongodb+srv://fcinar:Furkan2163@conseii.fdzv8.mongodb.net/?retryWrites=true&w=majority&appName=conseii");

    $database = $mongoClient->selectDatabase("siteniz");
    $collection = $database->selectCollection("contact");

    // Formdan gelen verileri al
    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    
    $message = $this->request->getPost('message');

    // Debugging: Form verilerini kontrol et
    if (!$name || !$email || !$message) {
        return redirect()->to('/sayfalar/iletisim')->with('error', 'Lütfen tüm alanları doldurduğunuzdan emin olun.');
    }

    try {
        // Veriyi MongoDB'ye kaydet
        $collection->insertOne([
            'name' => $name,
            'email' => $email,
           
            'message' => $message,
        ]);

        // Başarı mesajı ile yönlendir
        return redirect()->to('/sayfalar/iletisim')->with('success', 'Mesaj başarıyla gönderildi.');
    } catch (\Exception $e) {
        // Hata mesajı ile yönlendir
        return redirect()->to('/sayfalar/iletisim')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
    }
}

}