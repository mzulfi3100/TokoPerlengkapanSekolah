<?php

namespace App\Models;

use CodeIgniter\Model;

class FeaturedProductModel extends Model
{

    protected $table            = 'featuredProduct';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['images_product', 'name_product', 'category', 'price'];
}
