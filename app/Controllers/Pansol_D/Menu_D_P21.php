<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P21 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'GSMS POS Tidak Bisa Dibuka',
            'update' => '15:38 30/Oct/20',
            'rootcause' => [
                'GSMS POS TIDAK BISA DIBUKA'
            ],
            'gambar' => [
                'gsms.jpg',
                'gsmswarning.jpg'
            ],

            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi : check task manager - menu (process) pilih GSMS Printer Server - klik kanan end task lalu buka kembali GSMS nya',
                'itu artinya ada beberapa antrian di nozzle 1 dimana ada transaksi yang seblmnya belum selesai, namun ada transaksi lagi.',
                'Stackingnya di sett on harusnya off'
            ],
            'cek' => [
                'cek kabel apakah sudah betul',
                'cek kabel apakah sudah betul',
                'cek fdm apakah sesuai',
                'cek pin db 25 apakah sesuai',
                'cek pengaturan port pada enabler web',
                'cek pump pada enabler web apakah sesuai polling adres pump',
                'cek aplikasi pinsis apakah sudah shift logon',
                'cek dispenser apakah sudah dikonek.kabel data dan sesuai prosedur',
                'cek polling adres dispenser apakah sesuai sistem'
            ],
            'gsmspos' => 'gsmspos.jpg',
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P21/index', $data);
    }
}
