<?php

namespace App\Models;

use CodeIgniter\Model;

class LatestProductsModel extends Model
{

    protected $table            = 'latest_product';
    protected $primaryKey       = 'id_latest_product';
    protected $returnType       = 'object';
    protected $allowedFields    = ['image_latest', 'name_latest', 'price_latest'];
}
