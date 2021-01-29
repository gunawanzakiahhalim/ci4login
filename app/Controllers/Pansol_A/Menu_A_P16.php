<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P16 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi pembelian BBM subsidi',
            'update' => '10:24 26/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan cara pembelian BBM Subsidi.',
                'Terkait dengan pengisian BBM Subsidi (Solar/Premium) menggunakan jerigen diperbolehkan dengan jerigen memenuhi standar HSSE, cara pengisiannya pun mengikuti standar HSSE, dan harus berdasarkan dengan Peraturan Presiden No. 191/2014 dibawah.',
                'Peraturan Prersiden No. 191/2014 terlampir, pembelian BBM subsidi (solar/ BBM RON 88 Premium) di penyalur (SPBU) dilayani untuk keperluan penggunaan :'
            ],
            'penggunaan' => [
                'Transportasi Selain untuk kendaraan perorangan, kendaraan umum dan kendaraan pelayanan umum, wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya Artinya pada pembelian BBM tersebut langsung digunakan oleh kendaraan tersebut di SPBU, tidak melalui wadah atau tidak menggunakan jerigen atau tidak memakai wadah yang lain.',
                'Pelayanan umum, usaha mikro, pertanian dan perikanan Pengguna wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya Artinya pembelian bisa menggunakan sarana wadah atau jerigen asalkan bisa menunjukkan bukti verifikasi dan surat dari instansi terkait tersebut.'
            ],
            'cwc' => ['Information - Layanan BBK - Informasi pembelian BBM subsidi'],
            'todolist' => [
                'Lokasi SPBU dilihat di List SPBU terbaru (Pansol)',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('A/P16/index', $data);
    }
}
