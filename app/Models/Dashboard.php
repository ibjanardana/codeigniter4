<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard extends Model
{
    protected $table      = 'tbl_provinsi';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function get_sum($nama_kolom)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_provinsi');
        $builder->selectSum($nama_kolom);
        $query = $builder->get();
        return $query;
    }
}
