<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('styler/header');
        echo view('index');
        echo view('styler/footer');
    }
}
