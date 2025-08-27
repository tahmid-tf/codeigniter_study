<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Password extends BaseController
{
    public function set()
    {
        if (session('magicLogin')){
            return redirect()->to('set-password')->with('message', "Please update your password.");
        }

        return view('Password/set');
    }

    public function update()
    {
        $rules = [
            'password' => 'required|min_length[8]',
            'password_confirmation' => 'required|matches[password]',
        ];


        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user = auth()->user(); // current logged-in user

        if (!$user) {
            return redirect()->to('/login')->with('error', 'You must be logged in to set a password.');
        }

        $users = model(UserModel::class);

        // Update password
        $user->fill([
            'password' => $this->request->getPost('password'),
        ]);

        $users->save($user);
        session()->removeTempdata('magicLogin');

        return redirect()->to('/');
    }
}
