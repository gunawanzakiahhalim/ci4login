<?php

namespace App\Controllers;

use App\Models\ExportModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends BaseController
{
    protected $exportModel;
    public function __construct()
    {
        $this->exportModel = new ExportModel();
    }
    public function index()
    {
        $result = $this->exportModel->getExport();
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'JUDUL')
            ->setCellValue('C1', 'SLUG')
            ->setCellValue('D1', 'PENULIS')
            ->setCellValue('E1', 'PENERBIT')
            ->setCellValue('F1', 'SAMPUL');
        $kolom = 2;
        $nomor = 1;

        foreach ($result as $list) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $list['judul'])
                ->setCellValue('C' . $kolom, $list['slug'])
                ->setCellValue('D' . $kolom, $list['penulis'])
                ->setCellValue('E' . $kolom, $list['penerbit'])
                ->setCellValue('F' . $kolom, $list['sampul']);
            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Komik.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
