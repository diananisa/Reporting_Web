<?php
include 'koneksi.php';
// memanggil library FPDF
require('fpdf/fpdf.php');

// Membuat class custom untuk PDF
class PDF extends FPDF
{
    // Header
    function Header()
    {
        // Set font
        $this->SetFont('Arial', 'B', 16);
        // Title
        $this->Cell(190, 7, 'OPEN RECRUITMENT ROBOTIC DEVELOPMENT COMMUNITY', 1, 1, 'C');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(190, 7, 'DAFTAR PESERTA', 1, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $this->Ln(10);
    }

    // Footer
    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Print centered page number
        $this->Cell(0, 10, 'by Dian - Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Inisialisasi PDF
$pdf = new PDF('L', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Query data dari database
$mahasiswa = mysqli_query($con, "SELECT * FROM peserta");

// Loop untuk mencetak data
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(50, 6, 'NIM', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Nim'], 0, 1);

    $pdf->Cell(50, 6, 'NAMA MAHASISWA', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Nama'], 0, 1);

    $pdf->Cell(50, 6, 'FAKULTAS', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Fakultas'], 0, 1);

    $pdf->Cell(50, 6, 'PRODI', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Prodi'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 1', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan1'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 2', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan2'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 3', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan3'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 4', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan4'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 5', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan5'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 6', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan6'], 0, 1);

    $pdf->Cell(50, 6, 'PILIHAN 7', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Pilihan7'], 0, 1);

    $pdf->Cell(50, 6, 'ALASAN', 0, 0);
    $pdf->Cell(100, 6, ': ' . $row['Alasan'], 0, 1);

    // Tambahkan space setelah data mahasiswa
    $pdf->Ln(50);

    // Jika posisi melebihi batas, otomatis tambah halaman baru
    if ($pdf->GetY() > 140) {
        $pdf->AddPage();
    }
}

// Output PDF
$pdf->Output();
?>
