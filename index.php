<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $Nim = $_POST['Nim'];
    $Nama = $_POST['Nama'];
    $Fakultas = $_POST['Fakultas'];
    $Prodi = $_POST['Prodi'];
    $Pilihan1 = $_POST['Pilihan1'];
    $Pilihan2 = $_POST['Pilihan2'];
    $Pilihan3 = $_POST['Pilihan3'];
    $Alasan = $_POST['Alasan'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($con, "INSERT INTO peserta(Nim, Nama, Fakultas, Prodi, Pilihan1, Pilihan2, Pilihan3, Alasan) VALUES('$Nim','$Nama', '$Fakultas','$Prodi','$Pilihan1','$Pilihan2','$Pilihan3','$Alasan')");

    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil disimpan. <a href='cetak.php'>View Users</a>";
    exit();
}
?>
<html>

<head>
    <title>Data Peserta</title>
</head>

<body>
    <h1> NAMA ANDA DAN DIVISI YANG DIMINATI</h1>
    <!-- <a href="cetak.php">Go to Home</a>
    <br /><br /> -->
    <form action="index.php" method="post" name="form1">
        <table width="50%" border="0">
            <tr>
                <td>NIM</td>
                <td><input type="nunber" name="Nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="Prodi"></td>
            </tr>
            <tr>
                <!-- <td>Pilih salah satu dari 7 Divisi dibawah ini</td><br> -->
                <td>Pilihan 1</td>
                <td>
                    <div>
                        <input type="radio" id="Rscuad" name="Pilihan1" value="RSCUAD">
                        <label for="Rscuad">RSCUAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="Lj" name="Pilihan1" value="LJ">
                        <label for="LJ">LANANGE JAGAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="aljazari" name="Pilihan1" value="AlJazari">
                        <label for="AlJazari">AL-JAZARI</label><br>
                    </div>
                    <div>
                        <input type="radio" id="fireX" name="Pilihan1" value="FireX">
                        <label for="FireX">FIRE-X</label><br>
                    </div>
                    <div>
                        <input type="radio" id="sagotra" name="Pilihan1" value="Sagotra">
                        <label for="Sagotra">SAGOTRA</label><br>
                    </div>
                    <div>
                        <input type="radio" id="King" name="Pilihan1" value="Kingphoe">
                        <label for="Kingphoe">King Phoenix</label><br>
                    </div>
                    <div>
                        <input type="radio" id="djayanta" name="Pilihan1" value="Djayanta">
                        <label for="Djayanta">DJAYANTA</label><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="height: 20px;"></td>
            </tr>
            <tr>
                <!-- <td>Pilih salah satu dari 7 Divisi dibawah ini</td><br> -->
                <td>Pilihan2</td>
                <td>
                    <div>
                        <input type="radio" id="Rscuad" name="Pilihan2" value="RSCUAD">
                        <label for="Rscuad">RSCUAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="Lj" name="Pilihan2" value="LJ">
                        <label for="LJ">LANANGE JAGAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="aljazari" name="Pilihan2" value="AlJazari">
                        <label for="AlJazari">AL-JAZARI</label><br>
                    </div>
                    <div>
                        <input type="radio" id="fireX" name="Pilihan2" value="FireX">
                        <label for="FireX">FIRE-X</label><br>
                    </div>
                    <div>
                        <input type="radio" id="sagotra" name="Pilihan2" value="Sagotra">
                        <label for="Sagotra">SAGOTRA</label><br>
                    </div>
                    <div>
                        <input type="radio" id="King" name="Pilihan2" value="Kingphoe">
                        <label for="Kingphoe">King Phoenix</label><br>
                    </div>
                    <div>
                        <input type="radio" id="djayanta" name="Pilihan2" value="Djayanta">
                        <label for="Djayanta">DJAYANTA</label><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="height: 20px;"></td>
            </tr>
            <tr>
                <!-- <td>Pilih salah satu dari 7 Pilihan dibawah ini</td><br> -->
                <td>Pilihan3</td>
                <td>
                    <div>
                        <input type="radio" id="Rscuad" name="Pilihan3" value="RSCUAD">
                        <label for="Rscuad">RSCUAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="Lj" name="Pilihan3" value="LJ">
                        <label for="LJ">LANANGE JAGAD</label><br>
                    </div>
                    <div>
                        <input type="radio" id="aljazari" name="Pilihan3" value="AlJazari">
                        <label for="AlJazari">AL-JAZARI</label><br>
                    </div>
                    <div>
                        <input type="radio" id="fireX" name="Pilihan3" value="FireX">
                        <label for="FireX">FIRE-X</label><br>
                    </div>
                    <div>
                        <input type="radio" id="sagotra" name="Pilihan3" value="Sagotra">
                        <label for="Sagotra">SAGOTRA</label><br>
                    </div>
                    <div>
                        <input type="radio" id="King" name="Pilihan3" value="Kingphoe">
                        <label for="Kingphoe">King Phoenix</label><br>
                    </div>
                    <div>
                        <input type="radio" id="djayanta" name="Pilihan3" value="Djayanta">
                        <label for="Djayanta">DJAYANTA</label><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alasan</td>
                <td>
                    <textarea name="Alasan"></intextarea>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="height: 20px;"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" value="SUBMIT"></td>
            </tr>          
        </table>
    </form>
</body>

</html>