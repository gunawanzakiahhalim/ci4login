<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P17 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'EDC Tidak Ada Nama SPBU / Nama SPBU Berubah',
            'update' => '15:20 30/Oct/20',
            'rootcause' => [
                'EDC TIDAK ADA NAMA SPBU / NAMA SPBU BERUBAH'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Minta serial number EDC',
                'Pastikan EDC konek internet',
                'Lapor ke PINS dan akan di remote oleh pins'
            ],
            'gagal' => [
                'Tidak bisa koneksi ke server :' => [
                    'apakah sudah dipastikan kabel UTP bagus dan connect ke server',
                    'apakah ip PC POS nya sudah benar',
                    'komunikasi EDC ke PC POS belum lurus, coba di ping',
                    'RTO atau reply kalau gitu replay',
                    'Setalah ping restart PC dan EDC'
                ],
                'Contoh:' => [
                    'Error : Error 82 dan tanda cross di nozzle.',
                    'Analysis: Error komunikasi dispenser ke enabler.',
                    'Solusi : Solusi sementara restart komputer.'
                ]
            ],
            'edc' => [
                'untuk EDC Baru' => [
                    'Tinggal plug & play aja Sama aja prinsip nya dgn EDC sebelum nya',
                    'Itu step by step untuk konek ke doking wifi nya aja Dan itu sudah di setting oleh tim gudang waktu staging',
                    'Cara melihat dapat ip berapa di EDC nya',
                    '* Tinggal klik ssid wifi nya aja',
                    '* Untuk EDC Z90, wifi nya itu adalah wifi doking',
                    '* Jadi doking edc nya punya koneksi wifi ke EDC, biar EDC bisa lebih mobile bisa diangkat2',
                    '* Tetep nyambung ke UTP ke arah switch ( Switch===utp===doking ))))) EDC === kabel UTP )))) wireles )',
                    'Edc lama harus nempel di doking baru dapat IP, klo ga nempel maka koneksi hilang / ga dapat IP',
                    'NOTE : Untuk EDC baru untuk cek mac add nya atau Buat di setting konek ke akses point dengan pass : 190620'
                ],
                'Untuk EDC habis mati lampu dan tidak ada gambar networknya:' => [
                    'Langkah : langkah ini "Masuk ke wifi aja... Scroll down dari atas.. terus more setting Terus klik saved network"'
                ]
            ],
            'pass' => [
                '*Pass dan login masuk EDC Baru Z90*' => [
                    'Customer number : 8190100023',
                    'Account : JARING',
                    'Password：111111',
                    'slide kebawah - klik wlan - setting more - add network - masukin *PERTAMINA DAN PINS987PCS* - kemudian save',
                    'Pass EDC Z90 : 190620'
                ]
            ],

            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P17/index', $data);
    }
}
