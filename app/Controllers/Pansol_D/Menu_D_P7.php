<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P7 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case Nama PC POS salah, seharusnya 34-15123',
            'update' => 'update',
            'rootcause' => [
                'Case Nama PC POS salah, seharusnya 34-15123'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi :' => [
                    'Rename di bagian about pada Windows.'
                ]
            ],
            'gambar' => 'renamepos.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P7/index', $data);
    }
}
