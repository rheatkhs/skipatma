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
    public function grup_whatsapp()
    {
        return redirect()->to('https://chat.whatsapp.com/Kx7duengXl1HXcs8OTuqVq');
    }
    public function storePendaftaran()
    {
        $siswaModel = new SiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'jurusan' => $this->request->getPost('jurusan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'nisn' => $this->request->getPost('nisn'),
            'nik' => $this->request->getPost('nik'),
            'no_wa' => $this->request->getPost('no_wa'),
            'status' => 'BELUM DAFTAR ULANG'
        ];
        $nisn = $this->request->getPost('nisn');
        $nik = $this->request->getPost('nik');
        $nisnsiswa = $siswaModel->where('nisn', $nisn)->first();
        $niksiswa = $siswaModel->where('nik', $nik)->first();
        if ($nisnsiswa) {
            session()->setFlashdata('error', 'NISN sudah terdaftar.');
            return redirect()->to('/pendaftaran_online#pendaftaran');
        } elseif ($niksiswa) {
            session()->setFlashdata('error', 'NIK sudah terdaftar.');
            return redirect()->to('/pendaftaran_online#pendaftaran');
        }
        // dd($data);
        $siswaModel->insert($data);
        return redirect()->to('/#pendaftar');
    }
}
