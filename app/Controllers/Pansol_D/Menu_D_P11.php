<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P11 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case tidak bisa close day / Close shift (2)',
            'update' => '15:25 30/Oct/20',
            'rootcause' => [
                'Tidak bisa close day (2) :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Di lock all dl baru di close day',
                'Itu tandanya masih ada transaksi',
                'Lock all dl tunggu semua transaksi sls..bru klik close day',
                'Selanjutnya klik shift log on'
            ],
            'lock' => [
                'Di lock all dl kl tdk nanti attendant nya pada nyangkut Selama proses tutup shift, pompa hrs dlm keadaan LOCK ALL dan setelah proses shift logon berhasil baru di UNLOCK ALL'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P11/index', $data);
    }
}
