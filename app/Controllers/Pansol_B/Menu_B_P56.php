<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P56 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Petugas Menjual Regulator yang mengaku dari Pertamina',
            'update' => '10:00 27/Oct/20',
            'rootcause' => [
                'Pelanggan menanyakan ke-resmian Petugas yang menjual Regulator dan mengaku dari Pertamina.'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Penipuan'],
            'fcr' => [
                'Agent 135 menginformasikan kepada konsumen bahwa Pertamina tidak menjual regulator / aksesori tabung',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'todolist' => [
                'Solusi FCR: Informasikan Stanjab mengacu pada pansol "information - Mengirimkan Petugas untuk Menjual Regulator".',
                'Jika pelanggan tidak menerima penjelasan agent, pelanggan ingin sarannya ditanggapi dan agar Pertamina menindaklanjuti penipuan tersebut, indikasi HC > agent bantu eskalasi sesuai mandatory dan sampaikan SLA.'
            ],
            'mandatory' => [
                'Nama Pelapor :',
                'Tanggal dan Waktu Kejadian :',
                'Alamat Pelapor :',
                'Nama Perusahaan : (yang mengatasnamakan Pertamina)',
                'Alamat Perusahaan : (yang mengatasnamakan Pertamina)',
                'Detail Permasalahan :',
                'CP :',
                'Infokan Bukti Struk Pembelian, Brosur, atau Foto Petugas dikirim ke email pcc135@pertamina.com',
                'Email yang digunakan :',
                'Subject Email yang dikirimkan :'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P56/index', $data);
    }
}
