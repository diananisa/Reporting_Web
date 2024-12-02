<?php
include 'koneksi.php';
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'OPEN RECUTMENT ROBOTIC DEVELOPMENT COMMUNITY', 1, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR PESERTA', 1, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
// $pdf->Cell(0, 6, 'NIM', 0, 1);
// $pdf->Cell(0, 6, 'NAMA MAHASISWA', 0, 1);
// $pdf->Cell(25, 6, 'FAKULTAS', 0, 1);
// $pdf->Cell(50, 6, 'PRODI', 0, 1);
// $pdf->Cell(30, 6, 'PILIHAN1', 0, 1);
// $pdf->Cell(30, 6, 'PILIHAN2', 0, 1);
// $pdf->Cell(30, 6, 'PILIHAN3', 0, 1);
$mahasiswa = mysqli_query($con, "select * from peserta");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(50, 6, 'NIM ', 0, 0);
    $pdf->Cell(100, 7, $row['Nim'], 0, 1);

    $pdf->Cell(50, 6, 'NAMA MAHASISWA', 0, 0);
    $pdf->Cell(100, 7, $row['Nama'], 0, 1);

    $pdf->Cell(50, 6, 'FAKULTAS', 0, 0);
    $pdf->Cell(100, 7, $row['Fakultas'], 0, 1);

    $pdf->Cell(50, 6, 'PRODI', 0, 0);
    $pdf->Cell(100, 7, $row['Prodi'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 1', 0, 0);
    $pdf->Cell(100, 7, $row['Pilihan1'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 2', 0, 0);
    $pdf->Cell(100, 7, $row['Pilihan2'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 3', 0, 0);
    $pdf->Cell(100, 7, $row['Pilihan3'], 0, 1);

    $pdf->Cell(50, 6, 'ALASAN', 0, 0);
    $pdf->Cell(100, 7, $row['Alasan'], 0, 1);
}

$pdf->SetFont('Arial', '', 10);


// Go to 1.5 cm from bottom
$pdf->SetY(118);
// Select Arial italic 8
$pdf->SetFont('Arial', 'I', 8);
// Print centered page number
$pdf->Cell(0, 10, 'by dian', 0, 0 , 'C');
// $pdf->Cell(0, 10, 'Page ' . $pdf->PageNo(), 0, 0, 'C');
$pdf->Output();