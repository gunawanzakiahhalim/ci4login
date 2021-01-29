<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Aplikasi POT aplikasi lama',
            'update' => '15:48 30/Oct/20',
            'rootcause' => [
                'Aplikasi POT aplikasi lama'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Tap pada Online, pilih Standalone jika EDC digunakan belum integrasi ke dispenser',
                'Untuk mengecet settele bisa di cek melalui web merchant, dan file nya kasih ke SPBU atau panduannya'
            ],
            'gambar' => [
                'pot.jpg'
            ],
            'web' => [
                'Di web contoh :',
                'Contoh case SPBU ingin cek data transaksi bisa diweb ini',
                'untuk spbu 4450136 sudah punya user untuk akses web merchantnya untuk pengecekan transaksi.'
            ],
            'user' => [
                'user name : 190217071144907',
                'short code : spbu_4450136'
            ],
            'file' => [
                'untuk pengiriman file credential dikirim ke email berikut : gasindo_mp@yahoo.com',
                'silahkan untuk melakukan cek dan penarikan data di web merchant sesuai informasi tersebut',
                'Untuk informasi bisa minta dihelpdesk linkaja apakah si SPBU sudah punya usernya atau belum dan untuk pas biasanya di kirimkan melalui email SPBU nya atau perusahaannya SPBU harus cek email kalau memang tidak ketemu minta ke tim linkaja untuk mengirimkan kembali'
            ],
            'mobile' => [
                'mobilemoneyweb.jpg'
            ],
            'mode' => [
                'Mode standalone :' => [
                    'koneksi menggunakan simcard M2M atau wifi internet.',
                    'penggunaan nya tidak tergantung dgn system digitalisasi spbu pertamina',
                    'input nilai rupiah secara manual, sejumlah nilai rupiah transaksi yg diinginkan'
                ],
                'Mode Online :' => [
                    'koneksi menggunakan jaringan LAN kearah router POS digitalisasi spbu',
                    'penggunaan nya sangat tergantung pada system digitalisasi spbu pertamina',
                    'input nilai rupah transaksi otomatis hasil dari transaksi pada dispenser.',
                    'biasanya penggunaan mode online dipakai pada SPBU yg sudah terintegrasi.'
                ]
            ],
            'note' => [
                '* untuk aplikasi POT mode standalone berarti EDC nya masih memakai simcard dan EDC digunakan belum integrasi ke dispenser dan transaksi secara manual dalam digit paymentnya sesuai video transaksinya',
                '* sedangkan aplikasi POT dengan mode online memakai LAn, simcard sudah tidak terpakai dan memakai LAN untuk aplikasi mode ini , secara otomatis ketika digit dari dispenser akan terbaca harga oleh mesin EDC dan dia sudah terintegrasi dengan mesin dan sudah dilakukan pushconfig dengan benar cara pengoperasikan EDC POT mode online seperti di video'
            ],
            'standalone' => [
                'Biasa nya penggunaan mode standalone dipakai pada SPBU yg belum terintegrasi.' => [
                    'username: admin',
                    'Pass: pertamina2019'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P1/index', $data);
    }
}
