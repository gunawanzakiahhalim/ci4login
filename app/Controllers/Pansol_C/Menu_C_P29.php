<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P29 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Permintaan Blokir Nomor',
            'update' => '13:48 30/Oct/20',
            'rootcause' => [
                'Pelanggan tidak akan menggunakan lagi, apakah bisa delete akun atau di block aplikasinya ?'
            ],
            'cwc' => ['Permintaan - MyPertamina - Permintaan Blokir Nomor'],
            'todolist' => [
                'Jika tidak akan digunakan lagi tidak bisa delete akun, disarankan uninstall saja aplikasinya (FCR)',
                'Jika pelanggan keberatan/indikasi HK > agent bantu create tiket. Infokan SLA.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('C/P29/index', $data);
    }
}
