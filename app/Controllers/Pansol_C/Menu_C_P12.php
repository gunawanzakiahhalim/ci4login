<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P12 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keamanan Transaksi Digital di SPBU',
            'update' => '13:44 30/Oct/20',
            'rootcause' => [
                'Pertanyaan seputar Keamanan Transaksi Digital di SPBU'
            ],
            'cwc' => ['Information - MyPertamina - Keamanan Transaksi Digital di SPBU'],
            'todolist' => [
                'Saat ini sudah aman menggunakan Hp di SPBU',
                'Agent cek link website https://mypertamina.id/faq Pada Point 6,7,8,9.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P12/index', $data);
    }
}
