<?php

namespace App\Controllers;

use App\Models\ProdukModel;


class Product extends BaseController
{
    protected $produkModel;
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        // $produks = $this->produkModel->findAll();
        $data = [
            'title' => 'Product | Travelicious',
            'produk' => $this->produkModel->getProduct()
        ];
        return view('product', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Produk Perjalanan',
            'produk' => $this->produkModel->getProduct($id)
        ];
        return view('detail_produk', $data);
    }
}
