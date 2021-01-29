<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P6 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Case GSMS selalu loading dan GSMS blank',
            'update' => '15:52 30/Oct/20',
            'rootcause' => [
                'Case gsms selalu loading dan GSMS blank'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'Solusi : tampilan blank krna services psvr status blm start',
                'Win+R -> ketik : services.msc -> pilih services psvr -> klik kanan pilih start / langsung klik start (yang sudah ditandai) seperti gambar dibawah ini'
            ],
            'gambar' => 'startservice.jpg',
            'gsms' => [
                'Kalau ada kendala seperti ini biasanya cek dulu di task manager apa ada double running eror 82 itu pompa.' => ['-'],
                'sudah mode komunikasi tapi belum tersambung ke sistem harus cek dulu urutan' => [
                    'kabel sudah ok kah',
                    'fdm sudah ok kah',
                    'fcc sudah ok kah',
                    'seting ITL sudah ok kah',
                    'konektor db sudah ok kah'
                ]
            ],
            'komunikasi' => [
                'gsmsstop.jpg',
                'gsmsnetframework.jpg'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P6/index', $data);
    }
}
