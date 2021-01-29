<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P23 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Kerusakan EDC',
            'update' => '15:58 30/Oct/20',
            'rootcause' => [
                'Kendala kerusakan mesin EDC dengan keterangan EDC error, Tidak bisa print struk pembelian, EDC Hang, EDC mati total, EDC tidak connect ke server, dll dari sisi petugas SPBU (Pengawas, SPBU, dll)'
            ],
            'cwc' => ['Complaint - SPBU - Kerusakan EDC'],
            'todolist' => [
                'jika muncul keterangan "Invalid Configuration"' => [
                    'Restart edc dan log out Gsms printer server nya',
                    'Jika belum bisa, restart pc pos'
                ]
            ],
            'struk' => [
                'identifikasi penyebab gagal print :' => [
                    'operator melakukan back QR code sebelum print edc berhasil.',
                    'jaringan tdk stabil saat transaksi sukses.',
                    'operator tidak mengecek last payment saat tidak berhasil print struk.',
                    'pengecekan settlement tdk ada dikarenakan masih dalam proses singkronisasi',
                    'kurangnya edukasi ke customer'
                ],
                'solusi :' => [
                    'utk transaksi yg gagal print step yg hrs dilakukan adalah pilih dan cek menu last payment.',
                    'check web merchant',
                    'cek notif email akun yg terdaftar utk menerima notif',
                    'apps web merchant menggunakan smart phone - memberikan edukasi kepada operator oleh Pertamina dan Telkom Akses. (ketika integrasi)'
                ]
            ],
            'print' => [
                'Coba cek komunikasi ke PC POS' => ['-'],
                'Ping IP EDC, apakah muncul keterangan Reply / Reply Time Out.' => [
                    'Jika yang muncul adalah keterangan Reply berarti komunikasi aman',
                    'Jika yang muncul adalah RTO (Reply Time Out), cek perkabelannya, apakah sudah tercolok dengan benar atau belum.'
                ]
            ],
            'connect' => [
                'Restart pc pos',
                'Cek lagi sudah bisa connect atau belum',
                'Jika belum, arahkan untuk menonaktifkan windows firewall, jika posisinya ON, di OFF kan semua dan coba kembali',
                'Jika masih berkendala tidak bisa connect, agent bisa menyarankan untu lepas EDC dari docking selama 3 menit dan setelah itu pasang kembali',
                'Jika tidak bisa juga, sarankan untuk hubungi pihak integrator(Telkom)'
            ],
            'mandatory' => [
                'Nama Petugas :',
                'Jabatan :',
                'Tanggal Kejadian :',
                'No SPBU :',
                'Alamat SPBU :',
                'CP PIC :',
                'Email PIC :',
                'Detail Permasalahan : (Contoh : Perangkat EDC Error, tidak bisa print, EDC hang, EDC mati total, EDC tidak connect ke server, dll)',
                'Evidence berupa foto keterangan gagal dikirim ke pcc135@pertamina.com'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P23/index', $data);
    }
}
