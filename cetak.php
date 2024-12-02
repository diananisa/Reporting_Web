<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($con, "SELECT * FROM peserta");
?>
<html>

<head>
    <title>Halaman Cetak</title>
</head>

<body>
    <!-- <a href="cetak_data.php">Cetak Jawaban</a><br /> -->
    <table width='80%' border=1>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Pilihan 1</th>
            <th>Pilihan 2</th>
            <th>Pilihan 3</th>
            <th>Alasan</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['Nim'] . "</td>";
            echo "<td>" . $user_data['Nama'] . "</td>";
            echo "<td>" . $user_data['Fakultas'] . "</td>";
            echo "<td>" . $user_data['Prodi'] . "</td>";
            echo "<td>" . $user_data['Pilihan1'] . "</td>";
            echo "<td>" . $user_data['Pilihan2'] . "</td>";
            echo "<td>" . $user_data['Pilihan3'] . "</td>";
            echo "<td>" . $user_data['Alasan'] . "</td>";
            echo "<td><a href='cetak_data.php?id=$user_data[id]'>Cetak Data</a>";
        }
        ?>
    </table>
</body>

</html>