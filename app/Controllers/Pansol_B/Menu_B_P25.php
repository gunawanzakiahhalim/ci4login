<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P25 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kenaikan Harga',
            'update' => '9:33 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terjadinya kenaikan harga terhadap produk Domgas di Agen atau lingkup yang lebih luas'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Kenaikan Harga'],
            'fcr' => [
                'Informasi Harga Seharusnya dari Agent 135 ke konsumen based on publikasi harga Pertamina, sesuai kebijakan Pertamina/Pemerintah Daerah (HET) dan berlaku di outlet resmi Pertamina',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Agent cek terlebih dahulu source HET LPG. Jika harga HET sesuai dengan harga yang disampaikan pelanggan, maka solusi mengacu pada pansol "Menanyakan harga Product Gas (BBG, HAP, ViGas, Musicool)"',
                'Namun, jika terdapat perbedaan harga dimana terjadi kenaikan yang signifikan, maka agent bantu eskalasi. Identifikasi sbb:'
            ],
            'identifikasi' => [
                'Tanyakan nama pelapor.',
                'Tanyakan tanggal dan waktu kejadian.',
                'Tanyakan nama agen LPG dan lokasi dimana terjadinya kenaikan Harga (termasuk nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota).',
                'Tanyakan produk yang mengalami kenaikan Harga',
                'Tanyakan pelanggan sudah membandingkan dengan pangkalan/agen lainnya',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nama Agen/Pangkalan : (Opsional namun tetap tanyakan)',
                'Alamat Agen/Pangkalan : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Harga yang dikeluhkan :',
                'Harga HET :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P25/index', $data);
    }
}
