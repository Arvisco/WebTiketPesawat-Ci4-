<?php

namespace App\Controllers;

use App\Models\mod_viewticket;

class Viewticket extends BaseController
{
    protected $pesawats;
    public function __construct()
    {
        $this->pesawats = new mod_viewticket();
    }

    public function viewticket()
    {
        $pesawat = $this->pesawats->findAll();
        $data = [
            'title' => 'View Ticket',
            'pesawat' => $pesawat

        ];
        return view('admin/viewticket', $data);
    }
}