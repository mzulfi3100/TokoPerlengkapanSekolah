<?php

namespace App\Models;

use CodeIgniter\Model;

class Checkout extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'checkout';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['ongkir', 'total_keranjang', 'alamat', 'keterangan', 'provinsi', 'kabupaten', 'jasa_pengiriman', 'kurir', 'status'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
