<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P13 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kendala kode OTP tidak terisi atau salah',
            'update' => '14:03 30/Oct/20',
            'rootcause' => [
                'Jadi jika ada kendala kode OTP nya tidak terisi atau salah'
            ],
            'cwc' => ['Complaint - MyPertamina - Kendala kode OTP tidak terisi atau salah'],
            'todolist' => [
                'Cara untuk mendapatkan kode OTP nya kembali bukan ke menu daftar lagi karena akan muncul keterangan nomer sudah terdaftar.',
                'Bisa langsung arahkan pelanggan untuk login masukan nomer nya dan pin kemudian pilih masuk lalu setelah itu kode OTP akan dikirimkan lagi dan tinggal masukan kode OTP nya kembali.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P13/index', $data);
    }
}
