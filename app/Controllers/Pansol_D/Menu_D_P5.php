<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P5 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case EDC tidak connect seperti digambar dan sudah mengikuti manual quick guide masih belum bisa',
            'update' => '15:50 30/Oct/20',
            'rootcause' => [
                'Case EDC tidak connect seperti digambar dan sudah mengikuti manual quick guide masih belum bisa.'
            ],
            'gambar' => 'paymentedc.jpg',
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'ini yg harus di jalankan saat configurasi Printer :' => [
                    'Setting ip edc',
                    'Setting tiket printer di pinsyst',
                    'Jalanin gsms. Print',
                    'Jalanin apk pot di edc'
                ]
            ],
            'note' => [
                'Note :' => [
                    'Point nomer 2 harus sesuai',
                    'Jangan asal main hapus di Enabler tadi jadi susah karena ada hose id yg di hapus di sisi enabler web, jadinya parameter backend (set ticket printer) di pinsyt tidak ketemu ketika mencari hose id nya.'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P5/index', $data);
    }
}
