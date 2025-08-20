<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;
use App\Entities\Article;

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

    public function new()
    {

        $article = new Article(); // entity

        return view('Articles/new', [
            'article' => $article
        ]);
    }

    public function create()
    {

        $article = new Article($this->request->getPost()); // entity

        $model = new ArticleModel();
        $id = $model->insert($article);

        if ($id === false) {
            return redirect()->back()->with('errors', $model->errors())->withInput();
        }

        return redirect()->to(route_to('article_show', $id));
    }

    public function edit($id)
    {

        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();
        $data = $model->find($id);
        return view('Articles/edit', [
            'article' => $data
        ]);
    }

    public function update($id)
    {

        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();              // Model instance
        $article = $model->find($id);             // Entity instance

        $article->fill($this->request->getPost());

        if ($article->hasChanged()) {
            $model->save($article);                   // Save updated entity
        }


        return redirect()->to(route_to('article_show', $id));

    }
}
