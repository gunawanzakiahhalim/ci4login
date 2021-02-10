<?php

namespace App\Models;

use CodeIgniter\Model;

class PansolModel extends Model
{
    protected $table = 'pansol';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'id_menu', 'sla', 'subcategory1', 'status'];

    public function search($keyword)
    {
        return $this->table('pansol')->like('judul', $keyword);
    }

    public function getPansol($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
