<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P23 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Lupa Nomor PIN',
            'update' => '13:41 30/Oct/20',
            'rootcause' => [
                'Pertanyaan seputar informasi PIN Aplikasi MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - MyPertamina Lupa Nomor PIN'],
            'todolist' => [
                'Sarankan pelanggan memilih menu "Lupa pin anda?"',
                'Masukkan nomor yang terdaftar di MyPertamina',
                'Klik Reset PIN',
                'Pelanggan akan menerima sms berupa URL, klik URL tersebut',
                'Setelah masuk ke webpage reset PIN, pelanggan akan diminta memasukkan PIN baru. Sarankan ikuti instruksi selanjutnya sampai berhasil.',
                'PIN baru sudah berhasil dibuat, silakan login kembali ke aplikasi MyPertamina menggunakan PIN baru.'
            ],
            'note' => [
                'Jika langkah di atas sudah dilakukan, namun terkendala dalam proses reset PIN sehingga pelanggan tidak bisa login > agent mengacu pada pansol "gagal login"'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P23/index', $data);
    }
}
