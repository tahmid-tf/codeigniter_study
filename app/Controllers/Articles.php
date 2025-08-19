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

    public function new()
    {
        return view('Articles/new');
    }

    public function create()
    {

        // --------------------------- validation ---------------------------

//        $rules = [
//            'title'   => 'required|min_length[5]',
//            'content' => 'required|min_length[10]',
//        ];
//
//        if (!$this->validate($rules)) {
//            // Redirect back with input and validation errors
//            return redirect()->back()
//                ->withInput()
//                ->with('validation', $this->validator);
//        }

        // --------------------------- validation ---------------------------


        $title = htmlspecialchars($this->request->getPost('title'));
        $content = htmlspecialchars($this->request->getPost('content'));

        $model = new ArticleModel();
        $id = $model->insert([
            'title' => $title,
            'content' => $content
        ]);

        if ($id === false) {
            return redirect()->back()->with('errors', $model->errors())->withInput();
        }

        return redirect()->to(route_to('article_show', $id));
    }

    public function edit($id){

        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();
        $data = $model->find($id);
        return view('Articles/edit', [
            'article' => $data
        ]);
    }

    public function update($id){

        $db = db_connect();
        $db->listTables();

        $model = new ArticleModel();
        $title = htmlspecialchars($this->request->getPost('title'));
        $content = htmlspecialchars($this->request->getPost('content'));

        $model->update($id, [
            'title' => $title,
            'content' => $content
        ]);

        return redirect()->to(route_to('article_show', $id));
    }
}
