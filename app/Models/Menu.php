<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu extends Model
{
    public function list_item()
    {
        return $this->db->table('item')    #untuk manggil menu di home
            ->get()->getResultArray();
    }
}
