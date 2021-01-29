<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P21 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'MyPertamina Kendala Transaksi',
            'update' => '08.48 29/Nov/2020',
            'rootcause' => [
                'Tidak Bisa menggunakan Scan QR Code',
                'Mesin EDC MyPertamina tidak bisa digunakan, misal rusak, tidak ada jaringan, tdk ada koneksi, dll'
            ],
            'cwc' => ['Complaint - MyPertamina - MyPertamina Kendala Transaksi'],
            'todolist' => [
                'Agent wajib melakukan pengecekan di web dashboard untuk mengecek data transaksi pelanggan.',
                '#PENTING:',
                'Agent harus memastikan dalam permasalahan ini pelanggan bertransaksi menggunakan aplikasi MyPertamina, maka bisa ditindaklanjuti dengan identifikasi sesuai root cause dan possible cause di bawah. Namun, jika pelanggan transaksi menggunakan aplikasi LinkAja maka agent arahkan pelanggan menghubungi helpdesk LinkAja.'
            ],
            'qrcode' => [
                'Pastikan SPBU sudah suport dengan Aplikasi MyPertamina ( Lakukan Pengecekan di list SPBU yg Suport MyPertamina ) dan Aplikasi Pelanggan sudah di upgrade ke versi terbaru.' => ['-'],
                'Pastikan apakah petugas memilih metode pembayaran mypertamina di mesin EDC? bisa diketahui dari logo saat pelanggan scan QR Code.' => [
                    'Apabila logo menunjukkan LinkAja > berikan solusi berupa edukasi bahwa pastikan petugas memilih yang MyPertamina, paralel agent bantu eskalasi mengacu pansol knowledge petugas.',
                    'Apabila logo menunjukkan MyPertamina > berarti petugas sudah sesuai, agent lanjutkan ke point berikutnya'
                ],
                'Pastikan Nomor LinkAja pelanggan sama dengan nomor yang didaftarkan di Aplikasi MyPertamina.' => ['-'],
                'Tanyakan jenis hp dan android/IOS.' => [
                    'Jika pengguna android min OS 6, jika pengguna iphone min IOS 11 (closed). ',
                    'Jika pengguna sudah mengikuti ketentuan di atas, lanjut ke poin berikutnya.'
                ],
                'Untuk yang berkendala, Tanyakan Nomor SPBU dan Lokasi SPBU yang berkendala ( pastikan SPBU masuk dalam daftar list SPBU yg suport MyPertamina ) dan buatkan ticket' => ['-']
            ],
            'possible' => [
                '(Possible cause A, maintenance system)' => [
                    'cek info gangguan',
                    'Solusi : Sampaikan sesuai stanjab dan sarankan coba berkala (sarankan reinstall aplikasi). Jika jumlah saldo cukup banyak sarankan jangan mencoba transaksi berulang.'
                ],
                '(Possible cause B, linkaja belum aktif)' => [
                    'Pandu pelanggan untuk mengecek di aplikasi MyPertamina pada Homepage button LinkAja yang berwarna merah apakah masih terdapat keterangan "aktifkan"?',
                    'Jika "YA", akun LinkAja belum aktif atau belum terintegrasi dengan MyPertamina. Sarankan pelanggan untuk klik "aktifkan" dan ikuti langkah-langkah sesuai instruksi dari aplikasi.',
                    'Jika "TIDAK". Pada aplikasi MyPertamina jika button "LinkAja" diklik langsung menunjukkan saldonya berarti akun LinkAja sudah aktif. Kemudian agent mengacu pada possible cause C.'
                ],
                '(Possible Cause C, Kesalahan Sistem)' => [
                    'Pastikan aplikasi LinkAja terhubung dengan jaringan internet',
                    'Agent bantu eskalasi. Pastikan detail permasalahan diisi sesuai dengan keterangan pelanggan. Pastikan data tiket lengkap sesuai mandatory',
                    'Sampaikan SLA.'

                ]
            ],
            'mesinedc' => [
                'Tanyakan keterangan gagal',
                'Tanyakan nomor SPBU. Jika SPBU tidak support MyPertamina > agent informasikan (FCR). Namun, jika SPBU support MyPertamina agent create tiket dan sarankan pelanggan mengirim cature keterangan gagal ke email pcc135@pertamina.com',
                'Infokan SLA'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Keterangan Gagal :',
                'Detail Permasalahan :',
                'Pada SPBU lain dapat berhasil atau tidak :',
                'CP :',
                'Infokan SLA'
            ],
            'edc' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor SPBU :',
                'Alamat SPBU :',
                'Keterangan Gagal :',
                'Sebelumnya berkendala atau tidak :',
                'Detail Permasalahan :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P21/index', $data);
    }
}
