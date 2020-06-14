<?php

namespace App\Controllers;

use App\Models\Provinsi;
use App\Models\Dashboard;

class PageController extends BaseController
{
    protected $provinsi;
    protected $dashboard;

    public function __construct()
    {
        $this->provinsi = new Provinsi();
        $this->dashboard = new Dashboard();
    }

    public function index()
    {
        $totalPositif = $this->dashboard->get_sum('positif');
        $totalSembuh = $this->dashboard->get_sum('sembuh');
        $totalMeninggal = $this->dashboard->get_sum('meninggal');
        $provinsi = $this->provinsi->findAll();
        $data = [
            'title' => 'Codeigniter 4 | Dashboard',
            'content' => 'dashboard',
            'provinsi' => $provinsi,
            'totalPositif' => $totalPositif,
            'totalSembuh' => $totalSembuh,
            'totalMeninggal' => $totalMeninggal,
            //hello
        ];
        return view('layouts/v_master', $data);
    }

    public function provinsi()
    {
        $provinsi = $this->provinsi->findAll();
        $data = [
            'title' => 'Codeigniter 4 | Provinsi',
            'content' => 'provinsi',
            'provinsi' => $provinsi,
        ];
        return view('layouts/v_master', $data);
    }
}
