<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Article extends Entity
{

    protected $attributes = [
        'title'   => '',
        'content' => '',
    ];

    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
