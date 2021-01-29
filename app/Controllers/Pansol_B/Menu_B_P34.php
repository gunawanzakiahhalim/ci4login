<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P34 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Laporan Kecelakaan dan Permintaan Santunan',
            'update' => '13:31 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan mengalami kecelakaan / kerugian yang diakibatkan oleh pihak Pertamina,'
            ],
            'contoh' => [
                'Pelanggan mengalami kecelakaan akibat LPG (Elpiji, dan Bright Gas) meledak.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Laporan Kecelakaan dan Permintaan Santunan'],
            'fcr' => [
                'Solusi FCR: Sampaikan stanjab "Dalam kejadian tersebut Pertamina tidak dapat mengeluarkan kompensasi maupun tali asih karena masa transisi program konversi minyak tanah ke LPG sudah selesai. Kami turut prihatin atas insiden yang menimpa Bapak/Ibu, dan berharap agar kejadian serupa tidak terulang lagi. Kami menghimbau seluruh pihak pengguna LPG untuk memperhatikan keamanan penggunaan LPG yang baik dan benar."'

            ],
            'todolist' => [
                'Jika pelanggan belum menerima penjelasan agent,' => [
                    'maka edukasi bahwa Pertamina akan melakukan kembali sosialisasi penggunaan LPG yang aman ke masyarakat, melalui media (sosial dan konvensional), dengan mengkomunikasikan tips aman menggunakan LPG yakni, misal:',
                    'Pastikan kondisi ruangan dapur memiliki ventilasi yang cukup.',
                    'Tempatkan tabung dengan sirkulasi udara dan ventilasi yang baik.',
                    'Gunakan regulator berlogo SNI.',
                    'Pastikan klem terpasang erat pada kedua ujung selang.',
                    'Pastikan selang tidak tertekuk atau tertindih.',
                    'Sebelum menyalakan kompor, cek terlebih dahulu apakah ada bau khas gas elpiji tercium. Jika dirasa aman bisa langsung menyalakan kompor',
                    'Rutin melakukan pengecekan regulator dan selang yang sering terkena tumpahan makanan.',
                    'Kemudian, lakukan langkah berikut apabila terjadi kebocoran gas:',
                    'Matikan kompor, sumber api lainnya dan aliran listrik di dalam rumah.',
                    'Segera lepaskan regulator.',
                    'Bawa tabung ke luar atau ruang terbuka dan jauhkan dari sumber api.',
                    'Hubungi agen LPG resmi atau call center Pertamina 135.'
                ],
                'Jika pelanggan tidak menerima penjelasan agent dan indikasi HC > maka bantu eskalasi dan sampaikan SLA.' => [
                    'Tanyakan Nama Pelapor',
                    'Tanyakan Tanggal dan Waktu Kejadian',
                    'Tanyakan Channel Pembelian',
                    'Tanyakan Bukti Transaksi / Bukti Pendukung (jika ada)',
                    'Tanyakan Lokasi Detail Kejadian',
                    'Tanyakan Lokasi Detail Pelapor ( termasuk nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota, Jika di apartemen tambahakan nama apartemen, tower, lantai)',
                    'Tanyakan Detail Permasalahan',
                    'Tanyakan nomor yang bisa dihubungi (kondisional)'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Channel Pembelian : (Nama Agen/Nama Pangkalan/Indomaret/Klontong, dll)',
                'Lokasi Kejadian : (Pastikan Kecamatan, dan Kota Jelas)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan Bukti dikirim ke email pcc135@pertamina.com (Jika ada, jika tidak ada Poin Email yang digunakan, dan Email yang digunakan tidak perlu)',
                'Email yang digunakan :',
                'Subject Email yang dikirimkan :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P34/index', $data);
    }
}
