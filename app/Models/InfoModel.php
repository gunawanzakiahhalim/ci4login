<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    protected $table = 'info';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'id_menu', 'subcategory1', 'status'];

    public function getInfo($slug = false)
    {

        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
