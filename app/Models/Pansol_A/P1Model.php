<?php

namespace App\Models\Pansol_A;

use CodeIgniter\Model;

class P1Model extends Model
{
    protected $table = 'pansol';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'id_menu', 'sla', 'subcategory1', 'status'];
    public function getJudulPansol($id = false)
    {
        return $this->where(['id' => $id])->first()['judul'];
    }
    public function getSla($id = false)
    {
        return $this->where(['id' => $id])->first()['sla'];
    }
}
