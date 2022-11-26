<?php

namespace App\Models;

use CodeIgniter\Model;

class productsfoundModel extends Model
{

    protected $table            = 'products_found';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields    = ['name_product', 'image_product', 'price_product'];
}