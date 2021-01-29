<?php

namespace App\Controllers\Pansol_G;

use App\Controllers\BaseController;

class Menu_G_P1 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_G);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kendala Web PDS',
            'update' => '8:27 02/Nov/20',
            'rootcause' => [
                'Permasalahan website PDS:' => [
                    'Pelanggan mengeluhkan website tidak dapat diakses, loading, halaman utama tidak muncul, pilihan produk tidak muncul',
                    'Pelanggan kesulitan registrasi akun PDS (contohnya karena gagap teknologi karena faktor umur, wilayah, dll)',
                    'Pelanggan sudah memiliki akun, namun tidak bisa order karena area tidak tercover muncul keterangan "Mohon maaf tidak tersedia di wilayah anda"',
                    'Pelanggan menghubungi PCC 135 mengeluhkan tidak bisa order di website PDS karena kesulitan login'
                ]
            ],
            'cwc' => [
                'Complaint - Layanan BBM - PDS',
                'Complaint - Layanan Domgas - PDS',
                'Complaint - Lubricant - PDS'
            ],
            'todolist' => [
                'Tanyakan apakah berkendala untuk akses website lain juga atau hanya website PDS saja? Jika yang lain berkendala, maka sarankan pelanggan hubungi provider penyedia layanan internetnya. Namun, jika kendala hanya pada website PDS, solusi lanjut ke poin b.' => ['-'],
                'Pastikan jaringan stabil, sarankan restart perangkat yang digunakan dan coba kembali. Jika dalam 1x24 jam masih berkendala sarankan pelanggan hubungi kembali untuk dibantu eskalasi. Pastikan pencatatan CWC kronologi permasalahan pelanggan lengkap, agar agent selanjutnya tidak reinterview jika terjadi repeal call.' => ['-'],
                'Umumnya pelanggan menginginkan kemudahan dalam pemesanan, pada case ini agent juga tawarkan pelanggan untuk dibantu pemesanan oleh Tim Telemarketing di hari kerja. Jika pelanggan bersedia, agent input data pelanggan di ECA.' => [
                    '*Sementara CWC diinput pada kategori Complaint PDS. Paralel rekomendasi update CWC dieskalasikan ke tim terkait.'
                ],
                'Jika pelanggan menghubungi kembali dan sampaikan tidak jadi di FU oleh tim telemarketing, agent voice dapat edit data ECA dan ubah status closed.' => ['-']
            ],
            'email' => [

                'Jika pelanggan memiliki email. Agent sampaikan bahwa keluhan akan difollow up oleh Tim Terkait pada hari kerja. Pastikan agent menanyakan data mandatory lengkap (pelanggan tidak perlu memberikan data saat itu juga, agent voice hanya menanyakan dan sarankan pelanggan menyiapkan data No KTP, email, dan sebutkan data lainnya yang dibutuhkan untuk registrasi akun di website PDS). Setelah itu, agent input data pelanggan di ECA.' => [
                    '*Sementara CWC diinput pada kategori Complaint PDS. Paralel rekomendasi update CWC dieskalasikan ke tim terkait.'
                ],
                'Jika pelanggan menghubungi kembali dan sampaikan tidak jadi di FU oleh tim telemarketing, agent voice dapat edit data ECA dan ubah status closed.' => ['-']
            ],
            'registered' => [
                'Ketentuan PDS dengan area terbatas seperti PDS BBM, lubricant, dll., pastikan agent cek source terbaru, jika lokasi pelanggan memang tidak tercover maka sampaikan informasi tersebut.' => ['-'],
                'Jika cek source lokasi pelanggan seharusnya tercover, umumnya untuk PDS Domgas yang sudah berlaku nasional' => [
                    'Cek source lokasi mengacu pada gsheet domgas 135, jika ada silakan agent membuatkan tiket untuk permintaan PDS',
                    'Jika tidak ada di gsheet domgas 135, dapat mengacu pada source area promo kartini mengikuti Kecamatan/Kota, silakan agent membuatkan tiket untuk permintaan PDS',
                    'Jika tidak ditemukan di kedua source tsb, agent tetap membuatkan tiket untuk permintaan PDS dengan menyampaikan bahwa harga akan disampaikan oleh agen yg akan mengirim pesanannya',
                    '**Telemarketing dapat FU permintaan pelanggan di hari kerja senin-jumat jam 08.00-17.00 WIB.'
                ]

            ],
            'login' => [
                'agent sarankan pelanggan untuk reset password.' => [
                    'Jika sudah dilakukan, maka agent buat tiket complaint.'
                ]
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'mandatory',
                'No KTP :',
                'Email : (yang digunakan untuk Log In)',
                'Keterangan Gagal :',
                'Kode Voucher : (Jika voucher berkendala)',
                'Detail Permasalahan :',
                'CP :',
                'Screenshot kirim ke pcc135@pertamina.com, menggunakan Email :'
            ],
            'note' => '* Notes : untuk No KTP pastikan ditanyakan, namun jika pelanggan tidak berkenan silakan proses pelaporan',
            'sla' => '3x24 Jam'
        ];
        return view('G/P1/index', $data);
    }
}
