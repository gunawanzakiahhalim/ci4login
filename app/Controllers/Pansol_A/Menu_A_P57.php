<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P57 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'PIC / Alamat / Telepon SPBU',
            'update' => '10:57 26/Oct/20',
            'rootcause' => [
                'Informasi HRD ; Kepegawaian ; Korporasi ; PIC SPBU dsb'
            ],
            'cwc' => ['Information - Layanan BBK - PIC / Alamat / Telepon SPBU'],
            'todolist' => [
                'Standar Jawaban : "Bapak/ Ibu, mohon maaf , saat ini sedang terhubung dengan layanan CC 135 Pertamina. Informasi yang tersedia hanya terkait Produk dan Layanan Retail Pertamina saja."'
            ],
            'mandatory' => [
                'Stanjab'
            ],
            'sla' => 'FCR'
        ];
        return view('A/P57/index', $data);
    }
}
