<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    public function index()
    {
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->findAll();
        $data = [
            'siswa' => $siswa
        ];
        return view('index', $data);
    }
}
