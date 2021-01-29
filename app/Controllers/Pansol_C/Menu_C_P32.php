<?php

namespace App\Controllers\Pansol_C;

use App\Controllers\BaseController;

class Menu_C_P32 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_C);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Promo MyPertamina (Information)',
            'update' => '13:32 30/Oct/20',
            'rootcause' => [
                'Segala hal yang berkaitan dengan program promo MyPertamina.'
            ],
            'cwc' => ['Information - MyPertamina - Promo MyPertamina (Information)'],
            'todolist' => [
                'Tanyakan promo apa yang pelanggan ingin ketahui.' => ['-'],
                'Agent cek source syarat dan ketentuan promo terbaru.' => ['-'],
                'Agent informasikan seluruh syarat dan ketentuan promo sesuai source resmi atau website. Syarat dan ketentuan wajib diinformasikan lengkap karena bisa berdampak fraud atau merugikan pelanggan (FCR).' => ['-'],
                'Jika pertanyaan pelanggan spesifik seperti misalnya hanya bertanya periode promo,' => [
                    'agent infokan sesuai pertanyaan pelanggan,',
                    'namun agent wajib konfirmasi "apakah Bapak/Ibu sudah mengetahui syarat dan ketentuan promo yang dimaksud?", jika pelanggan sudah mengetahui, kewajiban menjelaskan SnK oleh agent menjadi gugur.',
                    'Tapi apabila pelanggan tidak mengetahui, agent wajib informasikan S n K secara lengkap.'
                ]
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'FCR'
        ];
        return view('C/P32/index', $data);
    }
}
