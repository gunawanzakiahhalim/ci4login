<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P53 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Permintaan Delivery LPG',
            'judul' => 'Permintaan Delivery LPG',
            'update' => '8:36 27/Oct/20',
            'rootcause' => [
                'Pelanggan ingin melakukan permintaan pengiriman Gas.'
            ],
            'cwc' => ['Demand - Layanan Domgas - Permintaan Delivery LPG'],
            'todolist' => [
                'Untuk kelengkapan alamat pengiriman, pastikan detail, agent tanyakan nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota,',
                'Jika di apartemen tambahakan nama apartemen, tower, lantai.',
                'Jika di perkantoran tambahkan lokasi detil/ nama building, lantai, nama kantin/warung',
                'Untuk poin alamat, agent dapat tanyakan mendetail layaknya pengiriman BHS (jika bingung dengan pengucapan pelanggan, lakukan spelling/pengejaan agar penulisan alamat benar).',
                'Pengiriman dihari yang sama maksimal pesan jam 14.00, sedangkan pemesanan > 14.00 dikirimkan keesokan hari (sesuai stanjab).',
                'Jadwal pengantaran senin-sabtu jam 08.00 -17.00 (sesuai aplikasi BHS), SLA eskalasi permintaan 1x24jam'
            ],
            'mandatory' => [
                'Mohon dibantu Permintaan berikut,',
                'Nama :',
                'Alamat Pengiriman :',
                'Jenis Pemesanan : Refill/Perdana',
                'Bright Gas ... Kg',
                'Jumlah Pesanan : ... Tabung',
                'Total Harga+Ongkir : Rp ...',
                'Tanggal Memesan :',
                'Tanggal Pengantaran :',
                'Pemesanan Catatan :',
                'CP :',
                '" Opsional : #KelihatanCerdasnya #DiRumahAja "'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('B/P53/index', $data);
    }
}
