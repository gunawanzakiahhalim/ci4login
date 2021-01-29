<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P67 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Takaran Tidak Sesuai',
            'update' => '9:08 26/Oct/20',
            'rootcause' => [
                'Terkait Takaran Tidak Sesuai :'
            ],
            'identifikasi' => [
                'Tanyakan secara detail indikator takaran tidak sesuainya apa? Apabila pelanggan merasa takaran tidak sesuai karena fuel indikator berbeda, agent edukasi seperti berikut:' => [
                    'Sebetulnya untuk memastikan takaran sesuai, setiap pelanggan memiliki hak melakukan Uji tera di SPBU secara berkala/periodik.',
                    'Indikator BBM di dalam mobil tidak dapat dijadikan sebagai acuan terra BBM, karena beberapa kondisi/sisa BBM dalam tanki/pelampung BBM dapat mempengaruhi naik dan turunnya indikator BBM kendaraan'
                ],
                'Jika pelanggan tidak bersedia kembali ke SPBU, agent create tiket sesuai mandatory dan sampaikan SLA.' => [
                    '-'
                ]
            ],
            'cwc' => ['Complaint - Layanan BBK - Takaran Tidak Sesuai'],
            'todolist' => [
                'Tanyakan Nama Pelapor.',
                'Apakah ada pelanggan lain yang mengeluhkan hal yang sama?',
                'Tanyakan Tanggal dan Waktu Kejadian.',
                'Nomor SPBU ( Tanpa Titik )',
                'Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                'Tanyakan jenis BBM',
                'Tanyakan Nama Petugas. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Nomor yang bisa dihubungi (kondisional )',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Petugas SPBU : (Pria/Wanita)',
                'Jenis BBM :',
                'Nominal Pembelian :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('A/P67/index', $data);
    }
}
