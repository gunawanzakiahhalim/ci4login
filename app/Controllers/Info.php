<?php

namespace App\Controllers;

use App\Models\InfoModel;

class Info extends BaseController
{
    protected $infoModel;
    protected $uri;
    protected $myuri;
    public function __construct()
    {
        $this->infoModel = new InfoModel();
        $this->uri = new \CodeIgniter\HTTP\URI('http://localhost:8080/info');
        $this->myuri = $this->uri->getSegments(2);
    }
    public function index()
    {
        $data = [
            'title' => 'Info Update Panduan Solusi',
            'info' => $this->infoModel->getInfo(),
            'menuuri' => $this->myuri[0]
        ];

        return view('info/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Info ',
            'info' => $this->infoModel->getInfo($slug),
            'menuuri' => $this->myuri[0]
        ];

        // jika info tidak ada di tabel
        if (empty($data['info'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik' . $slug . ' tidak ditemukan');
        }
        return view('info/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Info',
            'validation' => \Config\Services::validation(),
            'menuuri' => $this->myuri[0]
        ];

        return view('info/create', $data);
    }

    public function save()
    {
        //dd($this->request->getVar());
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[info.judul]',
                'errors' => [
                    'required' => '{field} info harus diisi.',
                    'is_unique' => '{field} info sudah terdaftar'
                ]
            ],
            'status' => [
                'rules' => 'max_size[status,1024]|is_image[status]|mime_in[status,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/info/create')->withInput();
        }

        // ambil gambar 
        $fileStatus = $this->request->getFile('status');
        // apakah tidak ada gambar yang di upload
        if ($fileStatus->getError() == 4) {
            $namaStatus = 'default.jpg';
        } else {
            // generate nama sampul random
            $namaStatus = $fileStatus->getRandomName();
            // pindahkan file ke folder img
            $fileStatus->move('img', $namaStatus);
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->infoModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'id_menu' => $this->request->getVar('id_menu'),
            'subcategory1' => $this->request->getVar('subcategory1'),
            'status' => $namaStatus
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambahkan.');
        return redirect()->to('/info');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id 
        $info = $this->infoModel->find($id);

        if ($info['status'] != 'default.jpg') {
            // hapus gambar
            unlink('img/' . $info['status']);
        }

        $this->infoModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/info');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Info',
            'validation' => \Config\Services::validation(),
            'info' => $this->infoModel->getInfo($slug),
            'menuuri' => $this->myuri[0]
        ];

        return view('info/edit', $data);
    }

    public function update($id)
    {
        // cek judul
        $infoLama = $this->infoModel->getInfo($this->request->getVar('slug'));
        if ($infoLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[info.judul]';
        }
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} info harus diisi.',
                    'is_unique' => '{field} info sudah terdaftar'
                ]
            ],
            'status' => [
                'rules' => 'max_size[status,1024]|is_image[status]|mime_in[status,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/info/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileStatus = $this->request->getFile('status');

        // cek gambar, apakah tetap gambar lama
        if ($fileStatus->getError() == 4) {
            $namaStatus = $this->request->getVar('statusLama');
        } else {
            // generate nama file random
            $namaStatus = $fileStatus->getRandomName();
            // pindah gambar
            $fileStatus->move('img', $namaStatus);
            // hapus file yang lama
            unlink('img/' . $this->request->getVar('statusLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->infoModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'id_menu' => $this->request->getVar('id_menu'),
            'subcategory1' => $this->request->getVar('subcategory1'),
            'status' => $namaStatus,
            'updated_at' => 'test'
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/info');
    }
}
