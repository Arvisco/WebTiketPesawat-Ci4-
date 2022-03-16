<?php

namespace App\Controllers;

use App\Models\mod_Aindex;


class A_index extends BaseController
{
    protected $admin;
    public function __construct()
    {

        $this->admin = new mod_Aindex();
    }

    public function index()
    {
        $pesawat = $this->admin->findAll();
        $data = [
            'title' => 'Dashboard Admin',
            'pesawat' => $pesawat

        ];
        return view('admin/index', $data);
    }
}
