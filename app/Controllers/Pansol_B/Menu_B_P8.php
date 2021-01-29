<?php

namespace App\Controllers\Pansol_B;

use App\Controllers\BaseController;

class Menu_B_P8 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_B);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'Delivery LPG - Namun Diluar Area',
            'update' => '8:35 27/Oct/20',
            'rootcause' => [
                'Pelanggan ingin melakukan permintaan pengiriman gas, namun lokasi pelanggan tidak tercover.'
            ],
            'cwc' => ['Demand - Layanan Domgas - Delivery LPG - Namun Diluar Area'],
            'todolist' => [
                'Lakukan Pengecekan apakah daerah pengiriman sudah terjangkau.'
            ],
            'solusi' => [
                'Infokan bahwa daerah pengiriman yang pelanggan infokan belum ter-cover oleh Agen Pertamina sehingga permintaan belum dapat diakomodir.',
                'Infokan untuk datang langsung ke agen terdekat, pangkalan, atau penjual eceran.',
                'FCR'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('B/P8/index', $data);
    }
}
