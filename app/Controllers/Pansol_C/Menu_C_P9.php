<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P9 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Hadiah Belum Diterima',
            'update' => '11:26 30/Oct/20',
            'rootcause' => [
                'Pelanggan mengeluhkan hadiah belum diterima'
            ],
            'cwc' => ['Complaint - MyPertamina - Hadiah Belum Diterima'],
            'todolist' => [
                'Keluhan redeem merchandise mypertamina' => [
                    '*Penanganan keluhan redeem merchandise mypertamina :*',
                    '*Pastikan poin mencukupi',
                    '> jika tidak mencukupi infokan S & K redeem.',
                    '> Jika poin mencukupi penanganan sesuai To Do List berikut:',
                    '1. Tanyakan tanggal redeem',
                    '2. Tanyakan status redeem berhasil/tidak berhasil, jika :'
                ]
            ],
            'keterangan' => [
                'Keterangan tidak berhasil:' => [
                    'Tidak berhasil namun poin berkurang : jika < 1x24 jam maka FCR dengan sarankan pelanggan tunggu 1x24 jam (jika sudah lebih dari 1x24 jam, maka bantu eskalasi).',
                    'Tidak berhasil dan poin tidak berkurang : tolong pastikan keterangan error. Jika keterangan errornya gagal : cek signal dlm konsisi stabil, sarankan pelanggan mencoba kembali.'

                ],
                'Keterangan berhasil:' => [
                    'Berhasil namun poin tidak berkurang : sarankan pelanggan menunggu 1x24 jam dan tidak disarankan mencoba berulang',
                    'Berhasil dan poin berkurang :'

                ]
            ],
            'poin' => [
                'b.1. Redeem kurang dr 7 hari. Sampaikan bahwa prosedur konfirmasi alamat dilakukan dalam kurun waktu maksimal 7 hari untuk selanjutnya proses pengiriman, agent pastikan alamat pengiriman sdh sesuai (cek daftar pelanggan yang berhasil redeem poin) dan nomor yang bisa dihubungi, edukasikan update profil di mypertamina juga.',
                'b.2. Redeem lebih dr 7 hari, maka disampaikan bahwa kemungkinan pihak Pertamina mengalami kesulitan menghubungi pelapor apakah itu telp tdk diangkat atau sulit dihubungi, agent verifikasi alamat pengiriman (cek daftar pelanggan yang berhasil redeem poin) dan nomor yang bisa dihubungi, edukasikan update profil, dan buatkan laporan.'
            ],
            'note' => 'Note : Jika pelanggan menukarkan berupa kaos/kemeja/jaket sertakan ukuran dan alamat alamat lengkapnya',

            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Penukaran :',
                'Nomor Tedaftar MyPertamina :',
                'No KTP :',
                'Jenis Merchandise :',
                'Jumlah Poin Sebelum Terpotong :',
                'Jumlah Poin Setelah Terpotong :',
                'Notifikasi Berhasil : (Berhasil/Tidak Berhasil)',
                'Detail Permasalahan :',
                'Alamat Pengiriman :',
                'Email :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P9/index', $data);
    }
}
