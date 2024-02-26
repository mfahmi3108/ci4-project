<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\PesanModel;

class Order extends BaseController
{
    protected $pesan;

    function __construct()
    {
        $this->pesan = new PesanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Order | Travelicious',
            'pesan' => $this->pesan->findAll()
        ];


        return view('pesan', $data);
    }
    public function create()
    {
        if (!$this->validate([
            'nama_pemesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tujuan_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'tanggal_berangkat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'nama_pemesan' => $this->request->getPost('nama_pemesan'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'tujuan_wisata' => $this->request->getPost('tujuan_wisata'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat')
        ];
        $request = $this->pesan->insert($data, false);

        if ($request) {
            session()->setFlashdata('success', 'Data berhasil ditambah');
        } else {
            session()->setFlashdata('failed', 'Data gagal ditambah');
        }

        return redirect()->to(base_url('/'));
    }
}
