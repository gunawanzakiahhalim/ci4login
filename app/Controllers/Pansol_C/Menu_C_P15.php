<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P15 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Cara Tukar Point',
            'update' => '13:39 30/Oct/20',
            'rootcause' => [
                'Pertanyaan seputar cara tukar point'
            ],
            'cwc' => ['Information - MyPertamina - MyPertamina Cara Tukar Point'],
            'todolist' => [
                'Informasikan sesuai source ter-update (by diana / arjuna / website resmi pertamina lainnya)'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nomor yang didaftarkan myPertamina :',
                'CP :',
                'No. KTP :',
                'Informasi yang ingin didapatkan :'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P15/index', $data);
    }
}
