<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P10 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Informasi Penggunaan Layanan Mypertamina',
            'update' => '13:42 30/Oct/20',
            'rootcause' => [
                'Pelanggan ingin transaksi menggunakan aplikasi MyPertamina.',
                'Misalnya MyPertamina masih menggunakan kartu? atau',
                'Bagaimana cara menggunakan aplikasi MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - Informasi penggunaan layanan Mypertamina'],
            'todolist' => [
                'Jika pelanggan bertanya mengenai kartu MyPertamina, informasikan saat ini kartu MyPertamina sudah tidak digunakan karena transaksi dilakukan secara digital langsung dari aplikasi.',
                'Pastikan pelanggan sudah registrasi akun MyPertamina dan sudah terhubung dengan LinkAja.'
            ],
            'penggunaan' => [
                'Cara penggunaan aplikasi MyPertamina:' => [
                    'Saat melakukan transaksi di SPBU, Petugas SPBU akan memasukan produk apa yang dibeli dan nominal pembayaran serta memilih metode pembayaran menggunakan aplikasi MyPertamina, tunggu sampai petugas memberikan Scan QR codenya.',
                    'buka aplikasi MyPertamina lalu scan QR code',
                    'setelah scan QR code, ikuti instruksi untuk memasukan pin LinkAja kemudian tekan yes/ok',
                    'lalu proses ini selesai setelah mendapatkan keterangan “Transaksi Berhasil”'
                ]
            ],
            'note' => [
                'Jika mengalami kendala transaksi, agent mengacu pada pansol sesuai permasalahan pelanggan'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P10/index', $data);
    }
}
