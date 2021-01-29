<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P14 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kebocoran LPG',
            'update' => '13:30 27/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan adanya kebocoran gas sesuai dengan jenis dan ukurannya'
            ],
            'cwc' => [
                'Complaint - Layanan Domgas - Kebocoran BG 12 kg',
                'Complaint - Layanan Domgas - Kebocoran BG 5.5 kg',
                'Complaint - Layanan Domgas - Kebocoran LPG 12 kg',
                'Complaint - Layanan Domgas - Kebocoran LPG 3 kg',
                'Complaint - Layanan Domgas - Kebocoran LPG 50 kg'
            ],
            'todolist' => [
                'Nama Pelapor',
                'Tanggal dan Waktu Kejadian',
                'Channel Pembelian',
                'Lokasi Detail Pelapor ( termasuk nama jalan, RT RW, Kelurahan, Kecamatan, Kab/Kota, Jika di apartemen tambahakan nama apartemen, tower, lantai)',
                'Detail Permasalahan',
                'Solusi: Berikan edukasi sesuai dengan sheet "langkah-langkah jika terjadi kebocoran" dan paralel agent bantu eskalasi. (**Jadi untuk case ini selain eskalasi, agent wajib edukasi agar pelanggan mengetahui langkah apa saja yang harus dilakukan jika terjadi kebocoran gas)',
                'Tanyakan nomor yang bisa dihubungi (kondisional )'
            ],
            'sheet' => [
                'Pertama adalah jangan panik.' => [
                    'Jika sudah tercium bau gas, segera matikan kompor atau sumber api lainnya dan pastikan tidak ada api dan tidak ada kontak listrik yang jelas,',
                    'misalkan jk sdh dalam keadaan mati lampu jangan dihidupkan atau jika dalam keadaan lampu menyalan jangan dimatikan.'
                ],
                'Kedua segera cabut regulator dan buka ventilasi Selanjutnya.' => [
                    'Segera cabut regulator tabung gas yang terpasang.',
                    'Gas yang mengumpul di dalam ruangan bisa memicu ledakan dan berbahaya bagi pernapasan.',
                    'Jadi lebih baik langsung buka jendela atau ventilasi di dalam dapur agar udara gas ikut terbawa keluar ruangan atau luar rumah.',
                    'Untuk menghindari hal ini, pastikan dapur memiliki sirkulasi udara yang cukup dengan memiliki saringan udara.',
                    'Jika sudah, segera bawa tabung gas keluar ruangan agar gas tidak semakin menumpuk di dalam dapur.'
                ],
                'Ketiga Tutup dengan kain basah.' => [
                    'Lalu bagaimana jika sudah terlihat api?',
                    'Segera ambil kain lap terdekat, basahkan dengan air, kemudian tutupi api dengan kain basah tersebut.',
                    'Dengan segera api pasti akan padam dan tidak akan terjadi ledakan.'
                ],
                'Keempat periksa regulator tabung gas secara berkala.' => [
                    'Lakukan pemeriksaan terhadap regulator tabung gas.',
                    'Gas yang bocor bisa disebabkan oleh regulator yang tidak tertutup rapat atau selang yang bolong karena digigit tikus.',
                    'Jika regulator dirasa sudah longgar atau ada bagian yang mulai rapuh, maka segera beli regulator yang baru.',
                    'Saat mengganti tabung gas, ada baiknya membersihkan regulator dan selang agar lebih awet.'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Alamat Kejadian :',
                'Channel Pembelian : (Nama Agen/Nama 5. Pangkalan/Indomaret/Klontong, dll)',
                'Jenis dan Ukuran LPG : (Bright Gas/Elpiji)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P14/index', $data);
    }
}
