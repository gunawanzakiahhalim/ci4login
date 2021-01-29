<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P3 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'BBM Kaleng',
            'update' => '9:17 26/Oct/20',
            'rootcause' => [
                'Informasi harga BBM kaleng, jenis yang disediakan, ukuran BBM kaleng dari masing-masing jenis produk, informasi yang berkaitan dengan BBM kaleng, atau informasi SPBU yang menjual BBM Kaleng > agent bantu create tiket.',
                '**Kecuali informasi lokasi SPBU BBM kemasan untuk produk yang terdapat dalam source "SPBU Jalur Toll Trans Jawa penyedia kemasan" > agent mengacu pada pansol "List SPBU BBM Kaleng").'

            ],
            'cwc' => ['Information - Layanan BBK - BBM Kaleng'],
            'todolist' => [
                'Tanyakan Nama, Lokasi pelapor dan produk apa yg dicari',
                'Jika produk dan lokasi tercover dalam source "SPBU Jalur Toll Trans Jawa penyedia kemasan", silakan mengacu pada pansol "List SPBU BBM Kaleng".',
                'Tetapi jika produk dan lokasi yang ditanyakan tidak ada dalam source "SPBU Jalur Toll Trans Jawa penyedia kemasan" > Arahkan ke Pertamina Delivery 135 (pastikan syarat dan ketentuan PDS BBM sudah terpenuhi oleh pelanggan), apabila pelanggan tidak berkenan delivery, agent bantu eskalasi untuk mendapatkan informasi yang dibutuhkan pelanggan.',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Lokasi Pelapor :',
                'Jenis Produk :',
                'Jumlah Keperluan :',
                'Detail Keperluan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P3/index', $data);
    }
}
