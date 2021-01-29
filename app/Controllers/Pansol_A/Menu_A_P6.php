<?php

namespace App\Controllers\Pansol_A;

use App\Controllers\BaseController;

class Menu_A_P6 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_A);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery BBM',
            'update' => '11:06 26/Oct/20',
            'rootcause' => [
                'Pertamina Delivery Service untuk Pertamina Dex dan Pertamax Turbo dengan maksimal order 30 liter dan minimal order 10 liter. Tidak bisa lebih karena sudah sesuai dengan regulasi pengantaran yang di berikan oleh pemerintah.'
            ],
            'syarat' => [
                'Pengiriman hanya berlaku untuk DKI Jakarta, sebagian kota-kota yang ada di provinsi Banten, Jawa Barat, Jawa Tengah, Jawa Timur, DI Yogyakarta dan Bali.',
                'Lokasi pelanggan tidak dalam ruangan tertutup (Basement, garasi) agar uap tidak berkumpul di satu titik. Pastikan pelanggan berada di ruang terbuka.',
                'Lokasi tidak berada di dalam tol karena petugas delivery menggunakan kendaraan motor.',
                'Pengantaran di lakukan mulai dari jam 08.00 – 20.00',
                'Jika pemesanan di lakukan di atas pukul 17.00 maka pengantaran akan di lakukan esok hari mulai pukul 08.00–20.00',
                'Untuk pemesanan bersifat 24/7 (Setiap hari)',
                'Untuk Pembayaran Cash (bisa di semua SPBU), Pembayaran menggunakan Voucher BBK Pertamina Retail Hanya di SPBU COCO saja. jadi WAJIB Ditanyakan (Agent wajib check SPBU nya), Pembayaran menggunakan MyPertamina bisa untuk SPBU yang tersedia Mesin EDC MyPertamina (Agent wajib check SPBU nya) (hampir semua kecuali 1 yang tidak memiliki EDC). Agent 135 sebaiknya menanyakan metode pembayaran kepada konsumen dan mengkonfirmasi ke SPBU metode pembayaran yang dipilih konsumen serta melakukan pengecekan apakah SPBU nya tersedia mesin EDC MyPertamina atau tidak.',
                'Untuk Pengantaran masih bersifat free ongkir ( Promo free ongkir sampai dengan 31 Maret 2020.(source by WA Grup Perisai Pertamina oleh SPV 16/01/2020 jam 10:20 ) dan ongkos kirim Rp. 20.000 per sekali kirim ( soure by Source By WA Group oleh SPV jam soure by WA Perisai 16/01/2020 jam 10:20 )',
                'Pelanggan yang sudah melakukan pemesanan akan di konfirmasi oleh pihak SPBU.'
            ],
            'cwc' => ['Demand - Layanan BBK - Delivery BBM'],
            'todolist' => [
                'Agent tanyakan lokasi pelanggan, jika dalam coverage area PDS BBM, agent lanjutkan ke point berikutnya.',
                'Namun, jika lokasi pelanggan di luar area PDS BBM agent mengacu ke pansol "Delivery BBM - Namun Diluar Area"',
                'Agent informasikan syarat dan ketentuan lengkap PDS BBM seperti produk, jumlah liter, keamanan lokasi, harga, dan lain sebagainya.',
                'Agent bantu eskalasi sesuai mandatory.',
                'Disclaimer permintaan delivery dengan menyebutkan poin-poin sesuai MOM BOD.',
                'Agent infokan SLA pengantaran dari 08.00-20.00'
            ],
            'mandatory' => [
                'Mohon dibantu Permintaan berikut,',
                'Nama :',
                'Alamat Pengiriman :',
                'Jenis Pemesanan :',
                'Jumlah Liter : ... Liter',
                'Harga : Rp ...',
                'Tanggal Memesan :',
                'Tanggal Pengantaran :',
                'No yang Menghubungi :',
                'CP (WA aktif) :',
                'Pembayaran :',
                'Note : ...'
            ],
            'sla' => 'OPTIONAL JIKA PELANGGAN MENANYAKAN ( Proses SLA 3 jam )'
        ];
        return view('A/P6/index', $data);
    }
}
