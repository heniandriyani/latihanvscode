<?php


require 'config/app.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A2', 'No');
$sheet->setCellValue('B2', 'Nama');
$sheet->setCellValue('C2', 'Telepon');
$sheet->setCellValue('D2', 'Kantor');
$sheet->setCellValue('E2', 'Alamat');
$sheet->setCellValue('F2', 'Keperluan');
$sheet->setCellValue('G2', 'Pesan & Kesan');
$sheet->setCellValue('H2', 'Tanggal');

$data_pengunjung = select("SELECT * FROM pengunjung");

$no = 1;
$start = 3;

foreach ($data_pengunjung as $pengunjung) {
    $sheet->setCellValue('A' . $start, $no++);
    $sheet->setCellValue('B' . $start, $pengunjung['nama']);
    $sheet->setCellValue('C' . $start, $pengunjung['nomor']);
    $sheet->setCellValue('D' . $start, $pengunjung['kantor']);
    $sheet->setCellValue('E' . $start, $pengunjung['alamat']);
    $sheet->setCellValue('F' . $start, $pengunjung['keperluan']);
    $sheet->setCellValue('G' . $start, $pengunjung['kesan']);
    $sheet->setCellValue('H' . $start, $pengunjung['tanggal']);

    $start++;
}

// table border
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$border = $start - 1;

$sheet->getStyle('A2:H' . $border)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheet.sheet');
header('Content-Disposition: attachment;filename="hello world.xlsx"');
readfile('hello world.xlsx');
unlink('hello world.xlsx');
exit;