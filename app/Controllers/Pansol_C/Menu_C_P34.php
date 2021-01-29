<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P34 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Saldo tidak bertambah LinkAja',
            'update' => '11:24 30/Oct/20',
            'rootcause' => [
                'Pelanggan tidak bisa migrasi LinkAja di aplikasi MyPertamina'
            ],
            'cwc' => ['Information - MyPertamina - Saldo tidak bertambah LinkAja'],
            'todolist' => [
                'Nama Pelanggan' => ['-'],
                'Tanggal dan waktu kejadian' => ['-'],
                'Pastikan nomer di aplikasi mypertamina dan aplikasi linkaja sudah sama' => ['-'],
                'Pastikan pelanggan melakukan pengecekan di aplikasi LinkAja apakah sudah bertambah atau belum?' => [
                    'Jika belum pastikan SLA 1x24 jam',
                    'Jika sudah sarankan pelanggan untuk login dan logout'
                ]
            ],
            'note' => 'Jika pelanggan keberatan mengikuti solusi yang diberikan dan indikasi hard complain atau ancam media massa, agent bisa bantu eskalasi lengkap dengan mandatory tiket dan sampaikan SLA.',
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Nomor Tedaftar MyPertamina dan LinkAja :',
                'No KTP :',
                'Nominal Top Up :',
                'Saldo Awal :',
                'Detail Permasalahan :',
                'Email :',
                'CP :',
                'Infokan SLA'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('C/P34/index', $data);
    }
}
