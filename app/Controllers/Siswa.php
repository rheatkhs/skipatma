<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;
use App\Models\PesanModel;

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
    public function sendMessage()
    {
        $pesanModel = new PesanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan')
        ];
        // dd($data);
        $pesanModel->insert($data);
        session()->setFlashdata('success', 'Pesan berhasil dikirim.');
        return redirect()->to('/');
    }
    public function pendaftaran_online()
    {
        return view('pendaftaran_online');
    }
}
