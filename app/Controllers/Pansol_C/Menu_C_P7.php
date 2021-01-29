<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P7 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Cara Upgrade Akun',
            'update' => '13:37 30/Oct/20',
            'rootcause' => [
                'Pelanggan ingin upgrade akun MyPertamina dengan cara upload KTP, namun tidak ada pilihan upload KTP.'
            ],
            'cwc' => ['Information - MyPertamina - Cara Upgrade Akun'],
            'todolist' => [
                'FCR > Agent informasikan saat ini aplikasi MyPertamina sudah tidak perlu upgrade akun.',
                'Namun, karena MyPertamina terhubung dengan LinkAja. Maka untuk kenyamanan pelanggan dalam bertransaksi disarankan upgrade akun LinkAja menjadi full service.',
                'Langkah upgrade menjadi full service dengan mendaftarkan NIK KTP, foto selfie dengan KTP di aplikasi LinkAja.',
                'Informasi lebih lengkap hubungi email info@LinkAja.id, helpdesk LinkAja 150911 atau Grapari terdekat.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('C/P7/index', $data);
    }
}
