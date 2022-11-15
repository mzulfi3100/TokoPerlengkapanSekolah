<?php

namespace App\Models;

use CodeIgniter\Model;

class Bank extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'bank';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_bank', 'no_rek'];
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
