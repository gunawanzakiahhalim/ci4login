<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P2 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Aturan Pengisian BBM untuk Pelayanan Umum, Usaha Mikro, Pertanian dan Perikanan',
            'update' => '10:51 26/Oct/20',
            'rootcause' => [
                'Pertanyaan terkait aturan pengisian BBM untuk Pelayanan Umum, Usaha Mikro, Pertanian dan Perikanan.'
            ],
            'cwc' => ['Information - Layanan BBK - Aturan Pengisian BBM untuk Pelayanan Umum, Usaha Mikro, Pertanian dan Perikanan'],
            'todolist' => [
                'Peraturan Prersiden No. 191/2014 terlampir, pembelian BBM subsidi (solar/ BBM RON 88 Premium) di penyalur (SPBU) dilayani untuk keperluan penggunaan :'
            ],
            'keperluan' => [
                'Transportasi Selain untuk kendaraan perorangan, kendaraan umum dan kendaraan pelayanan umum, wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya Artinya pada pembelian BBM tersebut langsung digunakan oleh kendaraan tersebut di SPBU, tidak melalui wadah atau tidak menggunakan jerigen atau tidak memakai wadah yang lain.',
                'Pelayanan umum, usaha mikro, pertanian dan perikanan Pengguna wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya Artinya pembelian bisa menggunakan sarana wadah atau jerigen asalkan bisa menunjukkan bukti verifikasi dan surat dari instansi terkait tersebut.'
            ],
            'mandatory' => [
                'Infokan sesuai Pansol'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P2/index', $data);
    }
}
