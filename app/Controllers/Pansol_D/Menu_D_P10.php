<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P10 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case tidak bisa close day / Close shift (1)',
            'update' => '15:23 30/Oct/20',
            'rootcause' => [
                'Case : tidak dapat close day / Close shift :'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Penyebab : 1 attendant di assign ke banyak pompa'
            ],
            'solusi' => [
                'Solusi :' => [
                    'Coba terus close day nya sampai semua is logon nya false. Selama proses tutup shift/close day, pompa harus dalam keadaan LOCK ALL',
                    'Setelah proses shift logon berhasil baru di UNLOCK ALL'
                ],
                'Solusi' => [
                    'Cek tombol UPS sudah di on kan atau belum',
                    'Klik on pada PC',
                    'Cek kabel dan catu ada daya listrik / tidak dengan cara test menggunakan charger hp apakah hp mau ngecas'
                ],
                'Jika terjadi kendala seperti ini pada saat login ke PC POS berarti masih ada aplikasi yang running, sarankan untuk restart atau shutdown PC POS.' => ['-']
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P10/index', $data);
    }
}
