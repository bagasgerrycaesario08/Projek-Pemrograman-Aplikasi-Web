<?php

namespace App\Models;

use CodeIgniter\Model;

class Akun extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'alamat', 'biodata', 'email', 'password', 'username'];
    public function cekAkun($a, $b)
    {
        return $this->db->table('user')
            ->where([
                'username' => $a,
                'password' => $b
            ])->get()->getRowArray(); #cek password dan username ada atau tidak jika ada kembalikan rowarray
    }

    public function getProfile($session)
    {
        return $this->db->table('user')
            ->where([
                'username' => $session
            ])->get()->getRowArray();
    }
    public function get_nama($a)
    {
        return $this->db->table('user')
            ->select('nama')
            ->where('username', $a)
            ->get()->getRow();
    }
}
