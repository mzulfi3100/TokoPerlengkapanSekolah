<?php

namespace App\Models;

use CodeIgniter\Model;

class Katalog extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'katalog';
    protected $primaryKey       = 'id_produk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_produk', 'harga_produk', 'stok_produk', 'deskripsi_produk', 'gambar_produk'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
