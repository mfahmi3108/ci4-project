<?php

namespace App\Controllers;

use App\Models\ProdukModel;

use App\Models\PesanModel;


class Pesan extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }





    public function index()
    {
        $data = [
            'title' => 'Detail Produk Perjalanan',
            'produk' => $this->produkModel->getProduct()
        ];
        return view('pesan', $data);
    }

    public function order()
    {
        $this->request->getVar();
    }




    public function pesan()
    {
        ($this->request->getVar());
    }
}
