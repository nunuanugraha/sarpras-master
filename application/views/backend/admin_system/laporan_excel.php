<?php
require_once '../config/koneksi.php';
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// menampilkan DB buku
$ambilRiwayat = $conn->query("SELECT * FROM tbl_riwayat ORDER BY id_pinjam DESC") or die(mysqli_error($conn));

// menambahkan header
$sheet->setCellValue('A1', 'ID Pinjam');
$sheet->setCellValue('B1', 'ID Peminjam');
$sheet->setCellValue('C1', 'No Dokumen');
$sheet->setCellValue('D1', 'Jumlah');
$sheet->setCellValue('E1', 'Tanggal Pinjam');
$sheet->setCellValue('F1', 'Tanggal Kembali');
$sheet->setCellValue('G1', 'Status');

// menambahkan data
$i = 2;
while ($pecahRiwayat = $ambilRiwayat->fetch_assoc()) {
    $sheet->setCellValue('A'.$i, $pecahRiwayat['id_pinjam']);
    $sheet->setCellValue('B'.$i, $pecahRiwayat['id_peminjam']);
    $sheet->setCellValue('C'.$i, $pecahRiwayat['no_dokumen']);
    $sheet->setCellValue('D'.$i, $pecahRiwayat['jml']);
    $sheet->setCellValue('E'.$i, $pecahRiwayat['tgl_pinjam']);
    $sheet->setCellValue('F'.$i, $pecahRiwayat['tgl_kembali']);
    $sheet->setCellValue('G'.$i, $pecahRiwayat['status']);
    $i++;
}

// menambahkan style
$styleArray = [
    'font' => [
        'bold' => true,
        'color' => ['argb' => 'FFFFFF'],
        'size' => 12,
        'name' => 'Calibri'
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'argb' => '2E86C1',
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A1:G1')->applyFromArray($styleArray);

// menambahkan border
$borderArray = [
    'borders' => [
        'outline' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => ['argb' => '000000'],
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A1:G'.($i-1))->applyFromArray($borderArray);

// menambahkan auto size
foreach(range('A','G') as $columnID) {
    $spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
}

// menyimpan file Excel
$filename = "riwayat_excel-(". date('d-m-Y') .").xlsx";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filename");
header("Cache-Control: max-age=0");

$writer = new Xlsx($spreadsheet);
$writer->save("php://output");
?>