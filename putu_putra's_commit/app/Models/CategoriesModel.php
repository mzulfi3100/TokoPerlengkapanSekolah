<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{

    protected $table            = 'categories_home';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $allowedFields = ['images', 'name',];
}
