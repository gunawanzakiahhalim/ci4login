<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P64 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Takaran LPG',
            'update' => '11:17 26/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan takaran LPG misalnya mengeluhkan indikator pada regulator tidak full dan penggunaanya cepat habis.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Takaran LPG'],
            'todolist' => [
                'Case regulator tidak full : Tanyakan secara detail indikator takaran tidak sesuainya apa?' =>  [
                    'Apabila pelanggan merasa takaran tidak sesuai karena indikator pada regulator tidak penuh, agent edukasi seperti berikut :',
                    'Sebetulnya untuk memastikan takaran sesuai, setiap pelanggan memiliki hak untuk meminta penimbangan lpg untuk memastikan isi dari lpg yang dibeli',
                    '// Indikator pada regulator tidak dapat dijadikan sebagai acuan isi dari LPG, karena Indikator pada regulator menunjukan tekanan pada lpg',
                    '// Solusi : Infokan indikator pada regulator tidak menentukan isi LPG, tapi indikator regulator menentukan tekanan gas. Sarankan untuk kembali ke tempat pembelian dan meminta untuk ditimbang untuk memastikan isi dari LPG.',
                    'Sampaikan pelanggan bisa mengetahui ketidaksesuaian takaran dengan melakukan perhitungan sbb :',
                    'Berat isi = Berat Total - Berat Tabung Kosong',
                    'keterangan:',
                    '*Berat tabung kosong akan terlulis pada cover tabung.',
                    '*Berat total adalah berat setelah ditimbang.'
                ],
                'Jika pelanggan tidak bersedia kembali ke tempat pembelian, agent create tiket sesuai mandatory dan sampaikan SLA.' => ['-']
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Alamat Pelapor :',
                'Channel Pembelian : (Nama Agen/Nama Pangkalan/Indomaret/Klontong, dll)',
                'Alamat Pembelian : (Opsional namun tetap tanyakan)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P64/index', $data);
    }
}
