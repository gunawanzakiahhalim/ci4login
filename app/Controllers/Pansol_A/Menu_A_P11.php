<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P11 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Fasilitas SPBU (Toilet, Mesin EDC, dll)',
            'update' => '14:04 16/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan terkait fasilitas toilet baik kebersihan, toilet berbayar, pintu rusak, dll. ',
                'Toilet merupakan salah satu fasilitas SPBU dan tidak berbayar.',
                'Agent bantu eskalasi dengan harapan fasilitas toilet lebih optimal.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Fasilitas SPBU (Toilet, Mesin EDC, dll)'],
            'todolist' => [
                'Tanyakan nama pelapor.',
                'Tanyakan tanggal dan waktu kejadian.',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan hanya mencantumkan lokasi dan patokan SPBU.',
                'Tanyakan Detail permasalahan',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Detail Permasalahan :',
                'CP :'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P11/index', $data);
    }
}
