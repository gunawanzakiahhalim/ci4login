<?php

namespace App\Controllers;

use App\Models\PansolModel;

class Pansol extends BaseController
{
    protected $pansolModel;
    public function __construct()
    {
        $this->pansolModel = new PansolModel();
        $this->uri = new \CodeIgniter\HTTP\URI('http://localhost:8080/pansol');
        $this->myuri = $this->uri->getSegments(2);
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_pansol') ? $this->request->getVar('page_pansol') : 1;

        $keyword = $this->request->getVar('keyword');
        $keynull = is_null($keyword);
        $session = session();
        if ($keyword) {
            $pansol = $this->pansolModel->search($keyword)->orderBy('id', 'DESC');
            $session->set('keypansol', $keyword);
        } else {
            if ($keynull) {
                $keypansol = $session->get('keypansol');
                if ($keypansol) {
                    $pansol = $this->pansolModel->search($keypansol)->orderBy('id', 'DESC');
                } else {
                    $pansol = $this->pansolModel->orderBy('id', 'DESC');
                    $session->set('keypansol', "");
                }
            } else {
                $pansol = $this->pansolModel->orderBy('id', 'DESC');
                $session->set('keypansol', "");
            }
        }
        $data = [
            'menuuri' => $this->myuri[0],
            'title' => 'Daftar Pansol',
            //'pansol' => $this->pansolModel->getPansol(),
            'pansol' => $pansol->paginate(6, 'pansol'),
            'pager' => $this->pansolModel->pager,
            'currentPage' => $currentPage

        ];

        return view('pansol/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'menuuri' => $this->myuri[0],
            'title' => 'Detail Pansol',
            'pansol' => $this->pansolModel->getPansol($slug)
        ];

        // jika pansol tidak ada di tabel
        if (empty($data['pansol'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul pansol ' . $slug . ' tidak ditemukan.');
        }
        return view('pansol/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'menuuri' => $this->myuri[0],
            'title' => 'Form Tambah Data pansol',
            'validation' => \Config\Services::validation()
        ];

        return view('pansol/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[pansol.judul]',
                'errors' => [
                    'required' => '{field} pansol harus diisi.',
                    'is_unique' => '{field} pansol sudah terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/pansol/create')->withInput();
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->pansolModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'id_menu' => $this->request->getVar('id_menu'),
            'sla' => $this->request->getVar('sla'),
            'subcategory1' => $this->request->getVar('subcategory1'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/pansol');
    }

    public function delete($id)
    {
        $this->pansolModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pansol');
    }

    public function edit($slug)
    {
        $data = [
            'menuuri' => $this->myuri[0],
            'title' => 'Form Ubah Data Pansol',
            'validation' => \Config\Services::validation(),
            'pansol' => $this->pansolModel->getPansol($slug)
        ];

        return view('pansol/edit', $data);
    }

    public function update($id)
    {
        // cek judul 
        $pansolLama = $this->pansolModel->getPansol($this->request->getVar('slug'));
        if ($pansolLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[pansol.judul]';
        }
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} pansol harus diisi.',
                    'is_unique' => '{field} pansol sudah terdaftar'
                ]
            ]
        ])) {

            return redirect()->to('/pansol/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->pansolModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'id_menu' => $this->request->getVar('id_menu'),
            'sla' => $this->request->getVar('sla'),
            'subcategory1' => $this->request->getVar('subcategory1'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/pansol');
    }
}
