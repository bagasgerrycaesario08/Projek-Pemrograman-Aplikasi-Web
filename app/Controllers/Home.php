<?php

namespace App\Controllers;

use App\Models\Menu; #manggil menu item
use App\Models\Akun;

class Home extends BaseController
{
    public function index()
    {
        $this->menu = new Menu();
        $qwert = $this->menu->list_item();
        $data = [
            'a' => $qwert
        ];

        return view('index', $data);
    }

    public function home()
    {
        $this->menu = new Menu();
        $this->akun = new Akun();
        $qwert = $this->menu->list_item();
        $nama = $this->akun->get_nama(session()->get('username'));
        $data = [
            'a' => $qwert,
            'b' => $nama->nama,
            'c' => session()->get('id')
        ];


        return view('index_home', $data);
    }

    public function profile()
    {
        $this->Akun = new Akun();
        session();
        $session = session()->get("username");

        $profil = $this->Akun->getProfile($session);
        $data = [
            'data' => $profil
        ];
        return view('profile', $data);
    }
}
