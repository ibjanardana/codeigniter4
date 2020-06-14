<?php

namespace App\Models;

use CodeIgniter\Model;

class Provinsi extends Model
{
    protected $table      = 'tbl_provinsi';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function get_id($table)
    {
    }

    public function get_detail($id)
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tbl_provinsi WHERE id_provinsi =' . $id);
        $row = $query->getResultArray();
        return $row;
    }
}
