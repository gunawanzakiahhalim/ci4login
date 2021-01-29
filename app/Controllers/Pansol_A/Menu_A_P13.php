<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P13 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Indikasi Kecurangan SPBU',
            'update' => '8:24 19/Oct/20',
            'rootcause' => [
                'Permasalahan terkait dengan pengisian BBM Subsidi (Solar/Premium) menggunakan jerigen jenis apapun, melakukan pembatasan pembelian dengan alasan yang tidak jelas, memprioritaskan pengisian untuk kendaraan tertentu maka termasuk "Indikasi Kecurangan".',
                'Terkait dengan pengisian BBM Subsidi (Solar/Premium) menggunakan jerigen diperbolehkan dengan jerigen memenuhi standar HSSE, cara pengisiannya pun mengikuti standar HSSE, dan harus berdasarkan dengan Peraturan Presiden No. 191/2014 dibawah. Namun, untuk memastikan apakah pihak SPBU sudah melakukan pengisian BBM Subsidi (Solar/Premium) ke jerigen sesuai Peraturan Presiden No. 191/2014 atau tidak, maka jika ada pelanggan yang mengeluhkan mengenai hal ini, agent tetap bantu eskalasi dengan kategori "Indikasi Kecurangan".',
                'Terkait dengan pengisian BBM Non Subsidi menggunakan jerigen diperbolehkan dengan syarat menggunakan Jerigen yang memenuhi standar HSSE, dan cara pengisiannya pun mengikuti standar HSSE.'
            ],
            'contoh' => [
                'Operator SPBU melayani pembelian BBM Subsidi (Solar/Premium), dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian), dan pembelian menggunakan jerigen maka termasuk "Indikasi Kecurangan".',
                'Operator SPBU melayani pembelian BBM Non subsidi, dimana calon pembeli tersebut tidak mengikuti antrian (menorobos antrian), dan pembelian menggunakan jerigen maka termasuk "Mendahulukan Pengisian Jerigen".',
                'Untuk kasus calon pembeli BBM Non subsidi, dimana calon pembeli mengikuti antrian, menggunakan Jerigen yang memenuhi standar HSSE, cara pengisian pun mengikuti standar HSSE, namun pelanggan lain mengeluh karena berimbas pada waktu tunggu antrian pelanggan lain dibelakangnya menjadi bertambah, maka case tersebut termasuk pada "Antrian SPBU".'
            ],
            'transportasi' => [
                'Transportasi Selain untuk kendaraan perorangan, kendaraan umum dan kendaraan pelayanan umum, wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya, artinya pada pembelian BBM tersebut langsung digunakan oleh kendaraan tersebut di SPBU, tidak melalui wadah atau tidak menggunakan jerigen atau tidak memakai wadah yang lain.',
                'Pelayanan umum, usaha mikro, pertanian dan perikanan Pengguna wajib dengan verifikasi dan rekomendasi dari instansi pemerintah yang ditunjuk yaitu Lurah/Kepala Desa/Kepala SKPD Kota/Kabupaten yang membidanginya, artinya pembelian bisa menggunakan sarana wadah atau jerigen asalkan bisa menunjukkan bukti verifikasi dan surat dari instansi terkait tersebut."'
            ],
            'kecurangan' => [
                'Untuk kategori ini juga bisa di gunakan sebagai acuan untuk tindak lanjut segala bentuk indikasi kecurangan seperti indikator dispenser di SPBU tidak di mulai dari 0, pemalsuan struk, penyalahgunaan jerigen, pungli, dll.',
                'pada dasarnya adalah tindakan kecurangan yang di perlihatkan dari sisi SPBU tersebut yang membuat pelanggan merasa tidak nyaman.'
            ],
            'cwc' => ['Complaint - Layanan BBM - Indikasi Kecurangan SPBU'],
            'todolist' => [
                'Tanyakan Nama Pelapor.',
                'Tanyakan Tanggal dan Waktu Kejadian',
                'Nomor SPBU ( Tanpa Titik ) atau Lokasi SPBU (seperti nama jalan dengan patokan atau tanda khusus untuk memudahkan proses pencarian nomor SPBU oleh 2nd Tier.)',
                '**Lokasi SPBU wajib ditanyakan walaupun pelanggan mengetahui nomor SPBUnya. Namun, jika pelanggan tidak mengetahui nomor SPBU, agent bisa tetap eskalasi dengan mencantumkan lokasi dan patokan SPBU.',
                'Tanyakan jenis BBM',
                'Tanyakan Nama Petugas SPBU. Jika pelanggan tidak mengetahui nama petugas SPBU, tanyakan min jenis kelaminnya (Perempuan/ Laki-laki)',
                'Tanyakan Detail permasalahan',
                'Tanyakan Nomor yang bisa dihubungi (kondisional)',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Jenis BBM :',
                'Nama Petugas SPBU : (Perempuan/ Laki-laki)',
                'Detail permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];

        return view('A/P13/index', $data);
    }
}
