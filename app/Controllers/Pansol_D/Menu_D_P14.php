<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P14 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Contoh Panduan Singkat Cek History Transaksi di Web Merchant Link Aja',
            'update' => '15:57 30/Oct/20',
            'rootcause' => [
                'Contoh Panduan Singkat Cek History Transaksi di Web Merchant Link Aja'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Klik menu Search >> organization.',
                'Masukan nomor SPBU ke kolom paling awal "Organization Short Code" (contoh %3410507), klik search.',
                'pilih kolom "operation" kemudian klik bagian "detail"',
                'pada bagian menu sebelah kiri, klik menu "Children"',
                'kemudian bagian tengah layar akan muncul menu "Children", pilih dan klik Nama SPBU yg tertera (contoh SPBU 3410507 Jakarta Pusat)',
                'kemudian akan muncul menu tambahan di bagian kanan, selanjutnya klik "More>>"',
                'Setelah muncul tab baru, pada menu sebelah kiri pilih "Organization Transaction" kemudian pilih "Review Transaction"',
                'Selanjutnya akan muncul menu baru, pilih pada bagian tanggal periode transaksi "Completion Time", dalam contoh saya pilih transaksi periode tgl 1 feb - 3 feb 2020.',
                'kemudian klik search dan akan keluar list transaksi dalam periode tanggal tersebut.'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P14/index', $data);
    }
}
