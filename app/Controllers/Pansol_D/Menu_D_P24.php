<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P24 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keterangan EDC tidak bisa cetak struk 2 kali',
            'update' => '15:31 30/Oct/20',
            'rootcause' => [
                'Keterangan edc tidak bisa cetak struk 2 kali'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Printnya sudah pernah di cetak Kemungkinan edc nya yg tdk bisa keluar kertas,',
                'Biasanya muncul logo printer disebelah kiri atas layar edc. Saat di cetak',
                'kalo diprint kembali muncul warning seperti keterangan digambar'
            ],
            'solusi' => [
                'Solusi :' => [
                    'Restart PC -> SPBU yg restart PC'
                ]
            ],
            'gambar' => 'warningcetak.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P24/index', $data);
    }
}
