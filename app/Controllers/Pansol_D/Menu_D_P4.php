<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P4 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Restart PC POS',
            'update' => '15:13 30/Oct/20',
            'rootcause' => [
                'CARA RESTART PC POS'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Langkah :' => [
                    'Klik lambang Windows (kiri bawah layar monitor).',
                    'Klik Power - Klik Restart hingga loading...',
                    'Klik Restart Anyway loading hingga nyala kembali, jika sdh muncul layar biru ada jam nya,',
                    'Usap ke atas pada layar',
                    'Masuk ke User',
                    'Operational',
                    '#OPR_spbu@2019',
                    'Tunggu aplikasi GSMS-POS dan GSMS-Print terbuka otomatis, hingga muncul tampilan nozle.',
                    'Login: ID. 3001',
                    'Pass : 3001',
                    'Klik Ok'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P4/index', $data);
    }
}
