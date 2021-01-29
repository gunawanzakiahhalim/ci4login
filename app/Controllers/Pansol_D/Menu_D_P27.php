<?php

namespace App\Controllers\Pansol_D;

use App\Controllers\BaseController;

class Menu_D_P27 extends BaseController
{
    public function index()
    {
        $uri = new \CodeIgniter\HTTP\URI($this->uri_pansol_D);
        $myuri = $uri->getSegments(2);
        $data = [
            'menuuri' => $myuri[0],
            'title' => 'List Kontak TA Regional di Telegram',
            'update' => '15:09 30/Oct/20',
            'rootcause' => [
                'LIST KONTAK TA Regional di Telegram'
            ],
            'cwc' => ['Informasi - SPBU -'],
            'todolist' => [
                'TA Reg 1 - Bobbi Pratama -> 085100089667',
                'TA Reg 2 - Joan -> 081294714965',
                'TA Reg 3 - Travertin Saputra -> 081320965958',
                'HD SPBU TReg 3 -> @hdspbutreg3',
                'TA Reg Bandung Barat - Aditya Prasetyo -> 082117197050',
                'TA Reg 4 - Dimas Ageng -> 082225927352',
                'Group SPBU TR 4 -> MO Andalan SPBU TR 4',
                'TA Reg 5 - Ikhwan Prasetyo -> 081282438009',
                'TA Reg 6 - Bayu Hadi -> 085393057194',
                'TA Reg 7 - Ilham Husain -> 082393381876'
            ],
            'mandatory' => [
                'mandatory',
                'mandatory',
                'mandatory'
            ],
            'sla' => 'Jam'
        ];
        return view('D/P27/index', $data);
    }
}
