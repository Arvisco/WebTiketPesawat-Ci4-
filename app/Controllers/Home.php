<?php

namespace App\Controllers;

use App\Models\mod_index;

class Home extends BaseController
{
    protected $pesawats;
    public function __construct()
    {
        $this->pesawats = new mod_index();
    }

    public function index()
    {
        $pesawat = $this->pesawats->findAll();
        $data = [
            'title' => 'Beranda',
            'pesawat' => $pesawat

        ];
        return view('index', $data);
    }
}
