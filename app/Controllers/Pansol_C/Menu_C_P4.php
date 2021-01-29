<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P4 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Migrasi LinkAja',
            'update' => '13:45 30/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan informasi migrasi LinkAja (misal : cara, waktu dll)'
            ],
            'cwc' => ['Information - MyPertamina - Cara migrasi LinkAja'],
            'todolist' => [
                'Saat ini apabila pelanggan menggunakan aplikasi MyPertamina versi terbaru memang sudah tidak bisa migrasi ke LinkAja karena metode pembayaran sudah otomatis akan menggunakan LinkAja sehingga langkah yang harus dilakukan hanya menghubungkan LinkAja dan aplikasi MyPertamina dengan cara klik "aktifkan".',
                'Jika pelanggan mengeluhkan kendala tidak bisa migrasi LinkAja > agent mengacu pada pansol sesuai permasalahan pelanggan.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P4/index', $data);
    }
}
