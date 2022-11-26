<?php

namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'wishlist';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_produk', 'harga_produk', 'gambar_produk', "berat_produk", "id_produk", 'id_user'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
