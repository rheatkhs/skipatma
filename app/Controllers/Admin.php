<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
}
