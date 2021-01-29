<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P8 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery BBM - Namun Diluar Area',
            'update' => '9:12 26/Oct/20',
            'rootcause' => [
                'Dalam percakapan ada pernyataan dari pelanggan bahwa ybs ada keinginan untuk memesan delivery BBM, namun lokasi ybs tidak dalam coverage area delivery BBM.'
            ],
            'cwc' => ['Demand - Layanan BBK - Delivery BBM - Namun Diluar Area'],
            'todolist' => [
                'Edukasi sesuai S&K close di agent. Namun,',
                'Agent create tiket dengan CWC permintaan delivery service sebagai masukan untuk pertamina bahwa di luar area jakarta ada permintaan untuk pertamina delivery service'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Alamat Pelapor : ( pastikan Kecamatan, dan Kota jelas. )',
                'No yang menghubungi :',
                'Tanggal dan Waktu Memesan :',
                'Jenis BBM :',
                'Jumlah BBM :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '1x24 Jam'
        ];
        return view('A/P8/index', $data);
    }
}
