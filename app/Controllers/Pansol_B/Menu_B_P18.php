<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P18 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Keluhan Delivery LPG',
            'update' => '8:33 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terkait dengan layanan pengantaran seperti keterlambatan, kondisi tabung rusak, segel terbuka, dll.',
                'Pelanggan mengeluhkan terkait aplikasi BHS, misalnya sudah memesan tiba-tiba riwayat hilang, cancel order, atau gangguan aplikasi BHS lainnya.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Keluhan Delivery LPG'],
            'fcr' => [
                'Agent 135 memberikan informasi Agen terdekat yang akan melayani pengiriman',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Nama Pelapor',
                'Lokasi Pengiriman (termasuk nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota, Jika di apartemen tambahakan nama apartemen, tower, lantai)',
                'Tanggal dan Waktu Pemesanan',
                'Channel Pemesanan',
                'Jenis dan Ukuran LPG yang dipesan',
                'Detail Tambahan',
                'Tanyakan nomor yang bisa dihubungi (kondisional)',
                'Untuk keluhan aplikasi BHS, pastikan nomor yang didaftarkan dan evidence keluhan bisa dikirim ke email pcc135@pertamina.com',
                'Agent bantu pelaporan sesuai mandatory, sampaikan SLA.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Pemesanan :',
                'Lokasi Pengiriman :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Jumlah Pemesanan :',
                'Tanggal dan Waktu Pengiriman :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P18/index', $data);
    }
}
