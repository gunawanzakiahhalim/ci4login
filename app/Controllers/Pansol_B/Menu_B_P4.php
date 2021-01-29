<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P4 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Bentuk valve LPG diubah menjadi seperti Produk Blue Gas krn dirasa lebih aman',
            'update' => '13:39 27/Oct/20',
            'rootcause' => [
                'Terkait Bentuk valve LPG diubah menjadi seperti Produk Bluegas krn dirasa lebih aman (masukan dari sms tgl27/06/2011 12:09:35)'
            ],
            'cwc' => ['Complaint - Layanan Domgas - Bentuk valve LPG diubah menjadi seperti Produk Bluegas krn dirasa lebih aman'],
            'todolist' => [
                'Agent 135 menyampaikan terima kasih atas masukannya dan akan menyampaikan ke Management Pertamina.',
                'Solusi FCR (Kalau Konsumen Puas Closed)'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => '3x24 Jam'
        ];
        return view('B/P4/index', $data);
    }
}
