<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = "users";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $allowedFields = ['email', 'username', 'nama_lengkap', 'no_telepon', 'jenis_kelamin', 'alamat'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}