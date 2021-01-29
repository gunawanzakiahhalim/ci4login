<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P33 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Redeem dengan Voucher Saphire Lounge Blue Sky Voucher',
            'update' => '13:58 30/Oct/20',
            'rootcause' => [
                'Terkait Redeem dengan Voucher Saphire Lounge Blue Sky Voucher'
            ],
            'cwc' => ['Complaint - MyPertamina - Redeem dengan Voucher Saphire Lounge Blue Sky Voucher'],
            'todolist' => [
                'Identifikasi:' => ['-'],
                'Tanyakan apakah sudah mengetahui...:' => ['-'],
                '1. Jika sudah :' => [
                    'Informasikan bahwa fasilitas yang bisa digunakan sama seperti fasilitas lounge lain pada umumnya yaitu sudah termasuk menikmati fasilitas makanan yang ada di lokasi serta fasilitas free lainnya yang disediakan lounge (kecuali yang berbayar), bahkan untuk fasilitas lounge menggunakan MyPertamina di bandara Surabaya dan Bali sudah termasuk akses baggage handling dan check-in langsung dari lokasi lounge (tanpa perlu antri di fasilitas umum).',
                    'Detail fasilitas apa saja yang bisa menggunakan aplikasi MyPertamina bisa ditanyakan langsung kepada petugas lounge.',
                    'Kartu Debit,',
                    'Merchant dan Mitra Linkaja,',
                    'Grapari'
                ],
                '2. Jika belum :' => [
                    'Informasikan bahwa akses tersebut sudah termasuk menikmati fasilitas makanan yang ada di lokasi serta fasilitas free lainnya yang disediakan lounge (kecuali yang berbayar), bahkan untuk penggunaan aplikasi MyPertamina di bandara Surabaya dan Bali sudah termasuk akses baggage handling dan check-in langsung dari lokasi lounge (tanpa perlu antri di fasilitas umum).',
                    'Detail fasilitas apa saja yang bisa menggunakan aplikasi MyPertamina bisa ditanyakan langsung kepada petugas lounge.'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('C/P33/index', $data);
    }
}
