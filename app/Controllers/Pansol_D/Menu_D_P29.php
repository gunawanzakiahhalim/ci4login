<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P29 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Troubleshoot Jika DISPENSER Tidak Mau Kembali Ke 0',
            'update' => '15:18 30/Oct/20',
            'rootcause' => [
                'TROUBLESHOOT JIKA DISPENSER TIDAK MAU KEMBALI KE 0'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Cek SERVER NYALA / TDK?',
                'LOGIN KE PC POS, CEK APLIKASI GMS JALAN ATAU TIDAK',
                'APLIKASI GSMS JALAN / TIDAK?',
                'JIKA APLIKASI GSMS JALAN, MINTA MATIKAN DISPENSER 20 DETIK LALU NYALAKAN LAGI',
                'JIKA GSMS TIDAK JALAN / hank (restart pc pos)',
                'JIKA MASIH BELUM BISA JUGA, SILAKAN HUB INTEGRATOR'
            ],
            'note' => [
                'NOTE : APLIKASI GMSM TIDAK BOLEH DI CLOSE, HARUS STANDBY, WINDOWS TIDAK BOLEH DI LOG OUT'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P29/index', $data);
    }
}
