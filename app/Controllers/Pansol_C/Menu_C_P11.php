<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P11 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi SPBU MyPertamina',
            'update' => '13:34 30/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan lokasi SPBU MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - Informasi SPBU MyPertamina'],
            'todolist' => [
                'Agent pastikan lokasi keberadaan pelanggan.',
                'Agent cek source terbaru, dan informasikan SPBU MyPertamina terdekat dari lokasi pelanggan > FCR.',
                '(Berlaku kondisional), Apabila data pada aplikasi MyPertamina sudah update, agent beri extra miles sbg edukasi agar pelanggan mengecek aplikasi MyPertamina untuk mengetahui lokasi SPBU support aplikasi MyPertamina. Pada poin ini, agent harus update dan mengetahui apakah data pada aplikasi sudah valid atau belum.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('C/P11/index', $data);
    }
}
