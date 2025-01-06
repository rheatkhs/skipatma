<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;
use App\Models\SiswaModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/index', $data);
    }
    public function data_siswa()
    {
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->findAll();
        $data = [
            'title' => 'Data Siswa',
            'siswa' => $siswa
        ];
        return view('admin/data_siswa', $data);
    }

    public function detail_siswa($id)
    {
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->where('id', $id)->first();
        $data = [
            'title' => 'Detail Siswa - ' . $siswa['nama'],
            'siswa' => $siswa
        ];
        return view('admin/detail_siswa', $data);
    }

    public function saveSiswa($id)
    {
        $siswaModel = new SiswaModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'jurusan' => $this->request->getPost('jurusan'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'nisn' => $this->request->getPost('nisn'),
            'nik' => $this->request->getPost('nik'),
            'no_wa' => $this->request->getPost('no_wa')
        ];
        $siswaModel->update($id, $data);
        session()->setFlashdata('message', 'Data siswa berhasil diubah.');
        return redirect()->to('/admin/data_siswa/detail_siswa/' . $id);
    }

    public function daftar_ulang()
    {
        $siswaModel = new SiswaModel();
        $siswaDaftar = $siswaModel->where('status', 'BELUM DAFTAR ULANG')->findAll();
        $data = [
            'title' => 'Daftar Ulang',
            'siswa' => $siswaDaftar
        ];
        return view('admin/daftar_ulang', $data);
    }
    public function sign_in()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('admin/sign_in');
    }
    public function storeAuth()
    {
        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $this->request->getPost('username'))->first();
        if ($admin) {
            $inputPassword = $this->request->getPost('password');
            $storedPassword = $admin['password'];
            if (password_verify($inputPassword, $storedPassword)) {
                $data = [
                    'id' => $admin['id'],
                    'nama_admin' => $admin['nama_admin'],
                    'username' => $admin['username'],
                    'email' => $admin['email'],
                    'logged_in' => true
                ];
                session()->set($data);
                return redirect()->to('/admin/dashboard');
            } else {
                session()->setFlashdata('message', 'Password salah.');
                return redirect()->to('/admin/sign_in');
            }
        } else {
            session()->setFlashdata('message', 'Username tidak ditemukan.');
            return redirect()->to('/admin/sign_in');
        }
    }
    public function sign_up()
    {
        return view('admin/sign_up');
    }
    public function storeAdmin()
    {
        $adminModel = new AdminModel();
        $data = [
            'nama_admin' => $this->request->getPost('nama_admin'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $adminModel->insert($data);
        session()->setFlashdata('success', 'Berhasil mendaftar, silahkan login.');
        return redirect()->to('/admin/sign_in');
    }
    public function sign_out()
    {
        session()->destroy();
        return redirect()->to('/admin/sign_in');
    }
}
