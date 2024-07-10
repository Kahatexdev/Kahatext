<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        helper(['url', 'form']);
    }
    public function index()
    {
        return view('auth/login');
    }
    public function loginSubmit()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        $user = $this->authModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => true,
            ]);

            if ($user['role'] == 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/chat');
            }
        } else {
            session()->setFlashdata('error', 'Invalid login credentials');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
