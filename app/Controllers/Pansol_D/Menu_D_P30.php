<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P30 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Troubleshoot Jika EDC Tidak Connect',
            'update' => '15:15 30/Oct/20',
            'rootcause' => [
                'TROUBLESHOOT JIKA EDC TIDAK CONNECT'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Restart pc pos',
                'cek lagi sudah bisa / belum',
                'jika belum, arahkan non aktif windows firewall, jika posisinya ON, di OFF kan semua',
                'coba kembali',
                'jika tidak bisa',
                'Lepas EDC dari docking selama 3 menit, setelah itu pasang kembali',
                'Jika tidak bisa juga, laporkan ke integrator'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P30/index', $data);
    }
}
