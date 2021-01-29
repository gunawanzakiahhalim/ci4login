<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Antrian Pengisian BBM di SPBU',
            'update' => '8:48 16/Oct/20',
            'rootcause' => [
                'Penyebab antrian itu secara umum ada 2 hal.',
                'Pertama dipengaruhi oleh faktor operasional SPBU,',
                'kedua dikarenakan adanya kelangkaan/keterlambatan stock.',
                'Jika dipengaruhi faktor kelangkaan silakan mengacu ke kategori "Kelangkaan BBM",',
                'yang masuk kategori "Antrian SPBU" adalah impact dari kebijakan operasional seperti penutupan salah satu pulau pompa, pembatasan pembelian, atau hal lain yang menyebabkan munculnya antrian.'
            ],
            'contohcase' => [
                'Untuk kasus calon pembeli BBM Non subsidi, dimana calon pembeli mengikuti antrian, menggunakan Jerigen yang memenuhi standar HSSE, cara pengisian pun mengikuti standar HSSE, namun pelanggan lain mengeluh karena berimbas pada waktu tunggu antrian pelanggan lain dibelakangnya menjadi bertambah, maka case tersebut termasuk pada ""Antrian SPBU"',
                'Untuk penyebab antrian terkait dengan pengisian BBM menggunakan jerigen BBM subsidi (Solar/Premium) maka kategori komplain masuk ke penanganan Pansol "Indikasi Kecurangan"',
                'SPBU melayani pembelian BBM Non subsidi, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian), dan pembelian menggunakan jerigen maka termasuk "Mendahulukan Pengisian Jerigen"',
                'Jika Operator SPBU melayani pembelian BBM Non subsidi, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian), dan pelanggan menggunakan kendaraan pribadi (mobil atau motor standar). Maka termasuk "Pelayanan Petugas SPBU"',
                'Jika pembatasan pembelian yang tidak menyebabkan antrian maka kategori komplain masuk ke penanganan Pansol "Pelayanan Petugas SPBU"'
            ],
            'cwc' => ['Complaint - Layanan BBM - Antrian Pengisian BBM di SPBU'],
            'todolist' => [
                'Jenis BBM' => [
                    'Solusi: FCR > Edukasi stanjab "Produk Premium dan Solar adalah produk subsidi sehingga sangat banyak peminatnya, dan kami informasikan sebenarnya produk subsidi hanya diperuntukkan bagi pelanggan tertentu mengacu perpres nomor 191/2014 tentang pembelian BBM subsidi. Kami sarankan Bapak/Ibu bisa mencoba antri di line produk Non subsidi karena selain tidak terlalu ramai, kualitas produk Non subsidi tentu lebih baik bagi mesin kendaraan."'
                ],
                'BBM Non Subsidi > Eskalasi dengan memastikan data berikut:' => [
                    'Tanyakan Nama Pelapor.',
                    'Tanyakan Tanggal dan Waktu Kejadian',
                    'Nomor SPBU',
                    'Lokasi SPBU',
                    'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                    'Tanyakan Detail permasalahan perihal antriannya apakah karena petugas atau ketiadaan stok, jika ketiadaan stok silakan mengacuk ke sub kategori kelangkaan. Jika karena petugas misalkan tidak ada pengaturan, memprioritaskan pelayanan jerigen, dsb, silakan mengikuti poin berikutnya.',
                    'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                    'iInfokan SLA',
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Nama Petugas SPBU : (Pria/Wanita)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P1/index', $data);
    }
}
