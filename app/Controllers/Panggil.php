<?php

namespace App\Controllers;
<<<<<<< HEAD

=======
>>>>>>> 9d156ea2bd53e9644453acc6f2511df10017f415
use App\Models\tampilmodel;

class Panggil extends BaseController
{
    public function index()
    {

<<<<<<< HEAD
        $tampilmodel = new tampilmodel();
        $data = $tampilmodel->findAll();

        $kirim = ['data_anggota' => $data];

        return view('Home', $kirim);
    }

    public function listanggota()
    {

        $tampilmodel = new tampilmodel();
        $data = $tampilmodel->findAll();

        $kirim = ['data_anggota' => $data];

        return view('listanggota', $kirim);
    }

    public function tambahanggota()
    {

        $tampilmodel = new tampilmodel();
        $data = $tampilmodel->findAll();

        $kirim = ['data_anggota' => $data];

        return view('tambahanggota', $kirim);
    }



    public function create()
    {
        $data = [
            'title' => 'tambah data'
        ];

        return view('tambahanggota/create', $data);
    }

    public function save()
    {
        $tampilmodel = new tampilmodel();
        $data = $tampilmodel->findAll();
        $this->tampilmodel->save(
            [
                'nama' => $this->request->getVar('nama'),
                'pangkat' => $this->request->getVar('pangkat'),
                'nrp' => $this->request->getVar('nrp')
            ]
        );

        return redirect()->to('listanggota');
    }



    // public function store()
    // {
    //     //load helper form and URL
    //     helper(['form', 'url']);

    //     //define validation
    //     $validation = $this->validate([
    //         'nama' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Nama'
    //             ]
    //         ],
    //         'pangkat'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Pangkat'
    //             ]
    //         ],
    //         'nrp' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan NRP'
    //             ]
    //         ],
    //         'jabatan'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Jabatan'
    //             ]
    //         ],
    //         'jeniskelamin' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Jenis Kelamin'
    //             ]
    //         ],
    //         'nivelering'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Nivelering'
    //             ]
    //         ],
    //         'tahunlulusdikpol' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Tahun Lulus Dikpol'
    //             ]
    //         ],
    //         'dikumakhir'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Pendidikan Umum Akhir'
    //             ]
    //         ],
    //         'dikpolakhir' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Pendidikan Polri Akhir'
    //             ]
    //         ],
    //         'agama'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Agama'
    //             ]
    //         ],
    //         'namadikjur' => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Nama Dikjur'
    //             ]
    //         ],
    //         'bagian'    => [
    //             'rules'  => 'required',
    //             'errors' => [
    //                 'required' => 'Masukkan Bagian'
    //             ]
    //         ],
    //     ]);

    //     if (!$validation) {

    //         //render view with error validation message
    //         return view('Panggil-create', [
    //             'validation' => $this->validator
    //         ]);
    //     } else {

    //         //model initialize
    //         $postModel = new PostModel();

    //         //insert data into database
    //         $postModel->insert([
    //             'nama'   => $this->request->getPost('nama'),
    //             'pangkat' => $this->request->getPost('pangkat'),
    //             'nrp'   => $this->request->getPost('nrp'),
    //             'jabatan' => $this->request->getPost('jabatan'),
    //             'janiskelamin'   => $this->request->getPost('jeniskelamin'),
    //             'nivelering' => $this->request->getPost('nivelering'),
    //             'tahunlulusdikpol'   => $this->request->getPost('tahunlulusdikpol'),
    //             'dikumakhir' => $this->request->getPost('dikumakhir'),
    //             'dikpolakhir'   => $this->request->getPost('dikpolakhir'),
    //             'agama' => $this->request->getPost('agama'),
    //             'namadikjur'   => $this->request->getPost('namadikjur'),
    //             'bagian' => $this->request->getPost('bagian'),
    //         ]);

    //         //flash message
    //         session()->setFlashdata('message', 'Post Berhasil Disimpan');

    //         return redirect()->to(base_url('panggil'));
    //     }
    // }
=======
		$tampilmodel = new tampilmodel();
		$data = $tampilmodel->findAll();
		
		$kirim=['data_anggota'=>$data];
		
        return view('Home',$kirim);
    }
>>>>>>> 9d156ea2bd53e9644453acc6f2511df10017f415
}
