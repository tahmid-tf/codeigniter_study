<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Articles extends BaseController
{
    public function index()
    {

        $data = [
            ['title' => 'One', 'content' => 'The first article'],
            ['title' => 'Two', 'content' => 'Some Content'],
        ];

        return view('Articles/index', [
            'articles' => $data
        ]);
    }
}
