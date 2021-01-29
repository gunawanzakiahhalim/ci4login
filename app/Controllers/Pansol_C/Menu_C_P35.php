<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P35 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Tahapan Aktivasi LinkAja pada Aplikasi MyPertamina',
            'update' => '14:04 30/Oct/20',
            'rootcause' => [
                'Informasi tahapan Aktivasi LinkAja pada Aplikasi MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - Tahapan Aktivasi LinkAja pada Aplikasi MyPertamina'],
            'todolist' => [
                'Pastikan pelanggan sudah melakukan tahapan Aktivasi LinkAja yang sesuai, sbb:'
            ],
            'gambar' => 'tahapan.jpg',
            'note' => [
                'Jika pelanggan berkendala ketika melakukan tahapan Aktivasi tersebut silahkan mengacu ke pansol "Tidak bisa menggunakan layanan LinkAja"'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P35/index', $data);
    }
}
