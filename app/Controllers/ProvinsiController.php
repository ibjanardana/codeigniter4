<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{

    public function __construct()
    {
        $this->provinsi = new Provinsi();
    }

    public function index($id)
    {
        $idProvinsi = $this->provinsi->get_detail($id);
        // dd($idProvinsi);
        $data = [
            'title' => 'Codeigniter 4 | Edit Data',
            'content' => 'editProvinsi',
            'idProvinsi' => $idProvinsi,
        ];
        return view('layouts/v_master', $data);
    }
}
