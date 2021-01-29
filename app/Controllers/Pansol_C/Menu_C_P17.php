<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P17 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina For Business',
            'update' => '14:24 30/Oct/20',
            'rootcause' => [
                'Terkait informasi mypertamina business'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina For Business'],
            'todolist' => [
                'Mohon dikonfirmasi kepada pic yang menelepon bahwa registrasi email perusahaan seharusnya didaftarkan dengan cara dibuatkan tiket pelaporan dahulu dari cc 135 untuk pengajuan ke pusat dan nanti ybs menunggu approval terlebih dahulu.',
                'Jadi jika pelanggan telepon terkait keluhan atau ada kendala tidak bisa login dsbnya mohon dikonfirmasi terlebih dahulu sebelumnya apakah sudah ada pengajuan registrasi email melalui cc 135 dengan dibuatkan pelaporan sebelumnya, jika belum maka buatkan tiketnya'
            ],
            'mandatory' => [
                'Nama Perusahaan :',
                'Alamat Perusahaan :',
                'Nama PIC :',
                'CP PIC :',
                'Alamat email PIC :',
                'Alamat email yang diajukan :',
                'Detail Permasalahan :'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P17/index', $data);
    }
}
