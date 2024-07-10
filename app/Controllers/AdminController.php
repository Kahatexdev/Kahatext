<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        $role= session()->get('role');
        $data = [
            'role'=>$role
        ];
        return view($role.'/index',$data);
    }
}
