<?php

namespace App\Models;

use CodeIgniter\Model;

class ExportModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getExport()
    {
        return $this->findAll();
    }
}
