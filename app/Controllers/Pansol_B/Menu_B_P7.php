<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P7 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery LPG - Cancel Order',
            'update' => '8:34 27/Oct/20',
            'rootcause' => [
                'Pelanggan ingin melakukan pembatalan order gas'
            ],
            'cwc' => ['Demand - Layanan Domgas - Delivery LPG - Cancel Order'],
            'todolist' => [
                'Jika masih dalam SLA (1x24 jam) agent 135 melobby pelanggan agar bersedia menunggu prosesnya.',
                'Ketika pelanggan tidak bersedia menunggu adengan alasan tertentu, agent 135 bantu eskalasi agar permintaan pelanggan bisa tersampaikan, namun agent tidak menjanjikan apapun kepada pelanggan karena 2nd Tier akan melakukan koordinasi dengan agen terkait status pengantarannya.'
            ],
            'mandatory' => [
                'ID Tiket Pemesanan :',
                'Nama Pelapor :',
                'Tanggal dan Waktu Pemesanan :',
                'Lokasi Pengiriman :',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Jumlah Pemesanan :',
                'Total Harga+Ongkir :',
                'Tanggal dan Waktu Pengiriman :',
                'Detail Tambahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('B/P7/index', $data);
    }
}
