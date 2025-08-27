<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use CodeIgniter\Shield\Entities\User;

class Users extends BaseController
{

    protected UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }


    public function index()
    {
        helper('admin');
        $perPage = 10; // Number of items per page
        $users = $this->model->orderBy('created_at')->paginate($perPage);
        $pager = $this->model->pager;

        return view('Admin\Views\Users\index', [
            'users' => $users,
            'pager' => $pager
        ]);
    }

    public function show($id)
    {

        $db = db_connect();
        $db->listTables();

        $user = $this->getUserOr404($id);


        return view('Admin\Views\Users\show', [
            'user' => $user
        ]);
    }

    public function ban($id)
    {
        $db = db_connect();
        $db->listTables();

        $user = $this->getUserOr404($id);

        if ($user->isBanned()) {
            $user->unBan();
        }else{
            $user->ban();
            $user->ban('Your reason for banning the user here');
        }

        return redirect('admin/users');
    }

    public function getUserOr404(int $id)
    {
        $user = $this->model->find($id);
        if (!$user) {
            throw new PageNotFoundException("User not found");
        }

        return $user;
    }


}
