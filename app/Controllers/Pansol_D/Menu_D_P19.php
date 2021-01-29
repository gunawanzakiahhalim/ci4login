<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P19 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC tidak bisa digunakan, muncul warning seperti gambar',
            'update' => '15:33 30/Oct/20',
            'rootcause' => [
                'EDC tidak bisa digunakan, muncul warning seperti gambar'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Reboot EDC',
                'Lalu log out Gsms printer server nya dan log in kembali'
            ],
            'gambar' => 'warningedc.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P19/index', $data);
    }
}
