<?php

namespace App\Models;

use CodeIgniter\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $allowedFields = ['id_item', 'id_user'];

    public function get_keranjang($user)
    {
        return $this->db->table('keranjang')
            ->select('*')
            ->where('id_user', $user)
            ->join('item', 'item.id_item = keranjang.id_item') #join iditem dan iduser kembali ke keranjang controller
            ->get()->getResultArray();
    }
}
