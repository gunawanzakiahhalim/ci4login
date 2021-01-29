<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P6 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Tukar Point LinkAja',
            'update' => '13:46 30/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan informasi tukar poin LinkAja'
            ],
            'cwc' => ['Information - MyPertamina - Cara Tukar Point LinkAja'],
            'todolist' => [
                'Jika pelanggan bertransaksi menggunakan aplikasi MyPertamina, maka poin loyalty yang didapatkan akan terakumulasi dan bisa dilihat dalam aplikasi MyPertamina.',
                'Jika pelanggan transaksi menggunakan aplikasi LinkAja dan menanyakan poin loyalty LinkAja, maka agent bisa arahkan pelanggan menghubungi helpdesk LinkAja.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P6/index', $data);
    }
}
