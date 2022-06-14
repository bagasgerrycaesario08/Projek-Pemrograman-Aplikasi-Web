<?php

namespace App\Controllers;

use App\Models\Akun; #manggil model akun

class Auth_controller extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function loginAuth() #untuk ambil data username & password dengan getpost
    {
        $this->Akun = new Akun();

        $username = $this->request->getPost('email');
        $password = $this->request->getPost('password'); #masuk variabel username dan password

        $qwert = $this->Akun->cekAkun($username, $password); #model akun di inisiasi menjadi object

        if ($qwert > 0) {
            session()->set('log', true);
            session()->set('id', $qwert['id_user']);
            session()->set('username', $qwert['username']);
            return redirect()->to('/home');
        } else {
            echo "gagal";
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->setFlashdata('pesan', 'Logout sukses');
        return redirect()->to('/');
    }

    public function daftarPengguna()
    {
        $this->Akun = new Akun();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'biodata' => $this->request->getPost('biodata'),
            'password' => $this->request->getPost('password'),
            'email' => $this->request->getPost('email')
        ];

        $this->Akun->insert($data);
        return redirect()->to('/');
    }
}
