<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P7 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery BBM - Cancel Order',
            'update' => '9:11 26/Oct/20',
            'rootcause' => [
                'Pelanggan sudah menghubungi sebelumnya untuk permintaan delivery BBM, sudah ada tiket, namun kemudian pelanggan menghubungi kembali meminta pesanan BBMnya dibatalkan'
            ],
            'cwc' => ['Demand - Layanan BBK - Delivery BBM - Cancel Order'],
            'todolist' => [
                'Agent sampaikan S&K cancel order karena jika sudah beberapa kali cancel order akan di blacklist sehingga pelanggan tidak bisa melakukan proses delivery order BBM.',
                'Tanyakan nomer HP yang menghubungi saat memesan.',
                'Agent cek history dan lakukan konfirmasi data sesuai notes tiket sebelumnya seperti tanggal dan waktu pemesanan, alamat, konfirmasi detail pemesanan yang akan di cancel.',
                'Tanyakan reason pembatalan.',
                'Agent bantu eskalasi dengan mengisi mandatory lengkap'
            ],
            'mandatory' => [
                'ID Pemesanan :',
                'Nama Pelapor :',
                'No yang menghubungi :',
                'Tanggal dan Waktu Memesan :',
                'Tanggal dan Waktu Cancel Order :',
                'Alasan Cancel Order :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P7/index', $data);
    }
}
