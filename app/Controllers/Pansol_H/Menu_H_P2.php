<?php

namespace App\Controllers\Pansol_H;

use App\Controllers\BaseController;

class Menu_H_P2 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_H);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi Stok BBM',
            'update' => '11:45 05/03/2021',
            'rootcause' => [
                'Pelanggan ingin mengetahui stock produk BBM di SPBU.',
                'Dalam case ini yang ditanyakan oleh pelanggan adalah ketersediaan stock BBM tertentu (atau sisa stock), bukan hanya ingin mengetahui SPBU tersebut menjual produk BBM tertentu.',
                'Indikasinya ada kekhawatiran ketika pelanggan mendatangi SPBU yang dimaksud, produk yang ingin dibeli habis.'
            ],
            'cwc' => ['Keluhan - SPBU & Fuel Product - Dealership/Kemitraan - Informasi stok BBM'],
            'fcr' => [
                'Agent 135 mencari Informasi Stock dengan cara menelpon ke SPBU dan konsumen',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'FCR > Agent cek source. Infokan sesuai data. (jika sudah tersedia data stock SPBU secara real time)',
                'Belum ada informasi yang terintegrasi terkait ketersediaan stock di setiap SPBU. Untuk informasi lebih lanjut silakan buatkan laporan dengan mengisi data mandatory tiket lengkap untuk diteruskan ke Tim RFM. Selain itu juga bisa edukasikan ke SPBU lain yang terdekat sesuai dengan data SPBU. (penanganan eksisting, karena belum ada source informasi stock SPBU)',
                'Infokan SLA',
                '*Sehubungan dengan belum tersedianya data stock SPBU secara real time, penanganan lanjut ke Notes penting'
            ],
            'notes' => [
                'Notes Penting',
                '*Edukasi ke pelanggan untuk mengaktifkan HPnya di beberapa waktu ke depan, dikarenakan akan dihubungi oleh agent PCC 135 ketika sudah ada informasinya',
                '*Informasi SLA 15 menit disampaikan apabila pelanggan menanyakan berapa lama waktu tunggu konfirmasinya',
                '*Jika HP/No pelanggan tidak aktif, lakukan CB sebanyak 3x dalam interval 10 menit (kondisional)'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM yang ditanyakan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '12 Jam'
        ];
        return view('H/P2/index', $data);
    }
}
