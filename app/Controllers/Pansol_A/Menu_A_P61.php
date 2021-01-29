<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P61 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Prosedur menjadi mitra (SPBU, APMS atau lembaga penyalur lainnya)',
            'judul' => 'Prosedur menjadi mitra (SPBU, APMS atau lembaga penyalur lainnya)',
            'update' => '10:50 26/Oct/20',
            'rootcause' => [
                'Pelanggan bertanya cara menjadi mitra Pertamina misalnya mendirikan SPBU'
            ],
            'cwc' => ['Prosedur menjadi mitra (SPBU, APMS atau lembaga penyalur lainnya)'],
            'todolist' => [
                'Agent informasikan bahwa pendaftaran menjadi mitra Pertamina dilakukan secara online melalui website https://kemitraan.pertamina.com/',
                'Agent informasikan syarat dan ketentuan menjadi mitra sesuai yang dibutuhkan pelanggan.',
                'FCR'
            ],
            'mandatory' => [
                'FCR'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P61/index', $data);
    }
}
