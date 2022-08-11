<?php

namespace App\Controllers;
use App\Models\tampilmodel;

class Panggil extends BaseController
{
    public function index()
    {

		$tampilmodel = new tampilmodel();
		$data = $tampilmodel->findAll();
		
		$kirim=['data_anggota'=>$data];
		
        return view('Home',$kirim);
    }
}
