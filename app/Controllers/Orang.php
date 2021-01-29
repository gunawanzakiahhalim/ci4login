<?php

namespace App\Controllers;

use App\Models\OrangModel;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;
        $keyword = $this->request->getVar('keyword');
        $session = session();
        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
            $session->set('keyorang', $keyword);
        } else {
            //$orang = $this->orangModel;
            $keyorang = $session->get('keyorang');
            if ($keyorang) {
                $orang = $this->orangModel->search($keyorang);
            } else {
                $orang = $this->orangModel->search('');
            }
        }
        $data = [
            'title' => 'Daftar Orang',
            //'orang' => $this->orangModel->findAll()
            'orang' => $orang->paginate(6, 'orang'),
            'pager' => $this->orangModel->pager,
            'currentPage' => $currentPage
        ];
        return view('orang/index', $data);
    }
}
