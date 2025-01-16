<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AdminModel;
use App\Models\SiswaModel;
use App\Models\DaftarUlangModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends BaseController
{
    public function index()
    {
        $siswaModel = new SiswaModel();
        $jurusan = [
            'AKUNTANSI DAN KEUANGAN LEMBAGA',
            'TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI',
            'TEKNIK OTOMOTIF'
        ];
        $jurusanCounts = [];
        foreach ($jurusan as $j) {
            $jurusanCounts[] = $siswaModel->where('jurusan', $j)->countAllResults();
        }
        $totalSiswaCount = $siswaModel->countAllResults();
        $totalSiswaDaftarUlangCount = $siswaModel->where('status', 'SUDAH DAFTAR ULANG')->countAllResults();
        $totalSiswaBelumDaftarUlangCount = $siswaModel->where('status', 'BELUM DAFTAR ULANG')->countAllResults();
        $get5LastSiswa = $siswaModel->orderBy('id', 'desc')->limit(5)->findAll();
        return view('admin/index', [
            'title' => 'Dashboard',
            'jurusanCounts' => $jurusanCounts,
            'totalSiswaCount' => $totalSiswaCount,
            'totalSiswaDaftarUlangCount' => $totalSiswaDaftarUlangCount,
            'totalSiswaBelumDaftarUlangCount' => $totalSiswaBelumDaftarUlangCount,
            'get5LastSiswa' => $get5LastSiswa
        ]);
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

    public function export_siswa()
    {
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->findAll();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $headers = [
            'Nomor Pendaftaran',
            'Nama',
            'Jenis Kelamin',
            'Jurusan',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat',
            'Asal Sekolah',
            'NISN',
            'NIK',
            'No WA',
            'Status'
        ];
        $column = 'A';
        foreach ($headers as $h) {
            $sheet->setCellValue($column . '1', $h);
            $column++;
        }
        $row = 2;
        foreach ($siswa as $s) {
            $sheet->setCellValue('A' . $row, $s['id']);
            $sheet->setCellValue('B' . $row, $s['nama']);
            $sheet->setCellValue('C' . $row, $s['jenis_kelamin']);
            $sheet->setCellValue('D' . $row, $s['jurusan']);
            $sheet->setCellValue('E' . $row, $s['tempat_lahir']);
            $tanggalLahir = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($s['tanggal_lahir']);
            $sheet->setCellValue('F' . $row, $tanggalLahir);
            $sheet->getStyle('F' . $row)->getNumberFormat()->setFormatCode('DD-MM-YYYY');
            $sheet->setCellValue('G' . $row, $s['alamat']);
            $sheet->setCellValue('H' . $row, $s['asal_sekolah']);
            $sheet->setCellValue('I' . $row, $s['nisn']);
            $sheet->setCellValue('J' . $row, $s['nik']);
            $sheet->setCellValue('K' . $row, $s['no_wa']);
            $sheet->setCellValue('L' . $row, $s['status']);
            $row++;
        }
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data Siswa Baru PPDB 2025.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
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

    public function storePendaftaranAdmin()
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
            return redirect()->to('admin/data_siswa');
        } elseif ($niksiswa) {
            session()->setFlashdata('error', 'NIK sudah terdaftar.');
            return redirect()->to('admin/data_siswa');
        }
        // dd($data);
        $siswaModel->insert($data);
        session()->setFlashdata('success', 'Data siswa berhasil ditambahkan.');
        return redirect()->to('admin/data_siswa');
    }

    public function hapus_siswa($id)
    {
        $siswaModel = new SiswaModel();
        $siswaModel->delete($id);
        session()->setFlashdata('message', 'Data siswa berhasil dihapus.');
        return redirect()->to('/admin/data_siswa');
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
    public function daftar_ulang_siswa($id)
    {
        $siswaModel = new SiswaModel();
        $daftarUlangModel = new DaftarUlangModel();
        $siswaModel->update($id, ['status' => 'SUDAH DAFTAR ULANG']);
        $data = [
            'timestamp' => date('Y-m-d H:i:s'),
            'id_siswa' => $id,
            'id_admin' => session()->get('id')
        ];
        $daftarUlangModel->insert($data);
        session()->setFlashdata('message', 'Siswa berhasil daftar ulang.');
        return redirect()->to('/admin/riwayat');
    }
    public function riwayat()
    {
        $daftarUlangModel = new DaftarUlangModel();
        $siswaModel = new SiswaModel();
        $adminModel = new AdminModel();
        $data = [];
        foreach ($daftarUlangModel->findAll() as $d) {
            $id = $d['id'];
            $timestamp = $d['timestamp'];
            $nama = $siswaModel->where('id', $d['id_siswa'])->first()['nama'];
            $nisn = $siswaModel->where('id', $d['id_siswa'])->first()['nisn'];
            $jurusan = $siswaModel->where('id', $d['id_siswa'])->first()['jurusan'];
            $admin = $adminModel->where('id', $d['id_admin'])->first()['nama_admin'];
            $data[] = [
                'id' => $id,
                'timestamp' => $timestamp,
                'nama' => $nama,
                'nisn' => $nisn,
                'jurusan' => $jurusan,
                'admin' => $admin
            ];
        }
        $data = [
            'title' => 'Riwayat Daftar Ulang',
            'daftar_ulang' => $data
        ];
        // dd($data);
        return view('admin/riwayat', $data);
    }
    public function kuitansi($id)
    {
        $daftarUlangModel = new DaftarUlangModel();
        $daftarUlang = $daftarUlangModel->where('id', $id)->first();
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->where('id', $daftarUlang['id_siswa'])->first();
        $adminModel = new AdminModel();
        $admin = $adminModel->where('id', $daftarUlang['id_admin'])->first();
        $data = [
            'title' => 'Kuitansi - ' . $siswa['nama'],
            'daftar_ulang' => $daftarUlang,
            'siswa' => $siswa,
            'admin' => $admin
        ];
        return view('admin/kuitansi', $data);
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
