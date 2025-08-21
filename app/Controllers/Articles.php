<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;
use App\Entities\Article;
use CodeIgniter\Exceptions\PageNotFoundException;

class Articles extends BaseController
{

    private $model;

    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    public function index()
    {
        $db = db_connect();
        $db->listTables();

        $data = $this->model->findAll();

        return view('Articles/index', [
            'articles' => $data
        ]);
    }

    public function show($id)
    {
        $db = db_connect();
        $db->listTables();

        $data = $this->getArticleOr404($id);

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

        $id = $this->model->insert($article);

        if ($id === false) {
            return redirect()->back()->with('errors', $this->model->errors())->withInput();
        }

        return redirect()->to(route_to('article_show', $id));
    }

    public function edit($id)
    {
        $db = db_connect();
        $db->listTables();
        $article = $this->getArticleOr404($id);

        return view('Articles/edit', [
            'article' => $article
        ]);
    }

    public function update($id)
    {
        $article = $this->model->find($id);

        if (! $article) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Get POST data, excluding the hidden _method field
        $data = $this->request->getPost();
        unset($data['_method']);

        $article->fill($data);

        if ($article->hasChanged()) {
            $this->model->save($article);
        }

        return redirect()->to(route_to('article_show', $id));
    }


    public function confirmDelete($id)
    {
        $article = $this->getArticleOr404($id);
        return view('Articles/delete', [
            'article' => $article
        ]);

    }

    public function delete($id)
    {
        $article = $this->getArticleOr404($id);

            $this->model->delete($id);
            return redirect()->to(route_to('article_index'))
                ->with('message', 'Article deleted successfully.');
    }


    public function getArticleOr404(int $id)
    {
        $article = $this->model->find($id);
        if (!$article) {
            throw new PageNotFoundException("Article not found");
        }

        return $article;
    }
}
