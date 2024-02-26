<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table            = 'pesan';
    protected $primaryKey       = 'id_pesanan';
    protected $allowedFields = ['nama_pemesan', 'no_hp', 'email', 'alamat', 'tujuan_wisata', 'tanggal_berangkat'];
}
