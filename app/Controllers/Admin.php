<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProdukModel;

class Admin extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Admin | Travelicious',
            'produk' => $this->produkModel->getProduct()
        ];
        return view('admin/admin', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Admin | Travelicious',
        ];
        return view('admin/tambah', $data);
    }
    public function insertdata()
    {
        if (!$this->validate([
            'nama_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            // 'sampul' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} tidak boleh kosong'
            //     ]
            // ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $dataSampul = $this->request->getFile('sampul');
        $fileName = $dataSampul->getName();
        $data = [
            'nama_wisata' => $this->request->getPost('nama_wisata'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jadwal' => $this->request->getPost('jadwal'),
            'sampul' => $fileName,
        ];
        $request = $this->produkModel->insert($data, false);
        $dataSampul->move('img', $fileName);

        if ($request) {
            session()->setFlashdata('success', 'Data berhasil ditambah');
        } else {
            session()->setFlashdata('failed', 'Data gagal ditambah');
        }

        return redirect()->to(base_url('admin'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Admin Edit | Travelicious',
            'produk' => $this->produkModel->getProduct($id)
        ];
        return view('admin/edit', $data);
    }

    public function update()
    {
        if (!$this->validate([
            'nama_wisata' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'jadwal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            // 'sampul' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} tidak boleh kosong'
            //     ]
            // ]

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $dataSampul = $this->request->getFile('sampul');

        $id = $this->request->getPost('id');
        $data = [
            'nama_wisata' => $this->request->getPost('nama_wisata'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'jadwal' => $this->request->getPost('jadwal'),
        ];

        if ($dataSampul->getSize() > 0) {
            $fileName = $dataSampul->getName();
            $data['sampul'] = $fileName;
            $dataSampul->move('img', $fileName);
        }

        $request = $this->produkModel->update($id, $data);


        if ($request) {
            session()->setFlashdata('success', 'Data berhasil ditambah');
        } else {
            session()->setFlashdata('failed', 'Data gagal ditambah');
        }

        return redirect()->to(base_url('admin'));
    }

    public function hapus($id)
    {
        $request = $this->produkModel->delete($id);

        if ($request) {
            session()->setFlashdata('success', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('failed', 'Data gagal dihapus');
        }

        return redirect()->to(base_url('admin'));
    }
}
