<?php

namespace App\Controllers;

use App\Models\Keranjang;

class KeranjangController extends BaseController
{
    public function index()
    {
        $this->keranjang = new Keranjang();
        $user = session()->get('id');

        $item = $this->keranjang->get_keranjang($user);

        $data = [
            'a' => $item,
            'b' => session()->get('id')
        ];


        return view('keranjang', $data);
    }

    public function masukKeranjang($item, $user) #ditrigger oleh tombol checkout di index_home dgn parameter item dan user
    {
        $this->keranjang = new Keranjang(); #inisiasi lalu insert iduser dan iditem

        $data = [
            'id_item' => $item,
            'id_user' => $user
        ];
        $this->keranjang->insert($data);
        return redirect()->to('/home');
    }
}
