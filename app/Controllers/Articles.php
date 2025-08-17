<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();
        $data = $model->findAll();

        return view('Articles/index', [
            'articles' => $data
        ]);
    }

    public function show($id)
    {
        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();
        $data = $model->find($id);

        return view('Articles/show', [
            'article' => $data
        ]);
    }

    public function new(){
        return view('Articles/new');
    }

}
