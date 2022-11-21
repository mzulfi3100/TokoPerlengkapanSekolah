<?php

namespace App\Models;

use CodeIgniter\Model;

class Checkout extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'checkout';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['ongkir', 'nama','tgl_pesan', 'batas_bayar', 'total_keranjang', 'alamat', 'keterangan', 'provinsi', 'nama_provinsi', 'kabupaten', 'nama_kabupaten', 'service', 'kurir', 'status', 'bukti_bayar', 'id_bank','id_user'];
    protected $useTimestamps = false; 
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
