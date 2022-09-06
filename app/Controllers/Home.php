<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('container');
    }

    public function listanggota()
    {
        return view('listanggota');
    }
}
