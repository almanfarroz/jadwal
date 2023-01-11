<?php
include 'config/koneksi.php';
include 'function/crud.php';
// menampilkan konfirmasi tambah data
if ( isset($_POST["submit"]) ) {

    // info data berhasil diinput
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan !');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecrud.css">
    <title>Tambah Data Jadwal</title>
</head>
<body>
<div class="container">
        <h1>Tambah Data Mahasiswa</h1>
    <table>
        <tr>
            <td><label for="hari">Hari</label></td>
            <td>=</td>
            <td><input type="text" name="hari"></td>
        </tr>
        <tr>
            <td><label for="kelas">Kelas</label></td>
            <td>=</td>
            <td><input type="text" name="kelas"></td>
        </tr>
        <tr>
            <td><label for="dosen">Dosen</label></td>
            <td>=</td>
            <td><input type="text" name="dosen"></td>
        </tr>
        <tr>
            <td><label for="ruang">Ruang</label></td>
            <td>=</td>
            <td><input type="text" name="ruang"></td>
        </tr>
        <tr>
            <td><label for="mata_kuliah">Mata Kuliah</label></td>
            <td>=</td>
            <td><input type="text" name="mata_kuliah"></td>
        </tr>
        <tr>
            <td><label for="tahun_ajaran">Tahun Ajaran</label></td>
            <td>=</td>
            <td><input type="text" name="tahun_ajaran"></td>
        </tr>
        <tr>
            <td><label for="semester">Slot Waktu</label></td>
            <td>=</td>
            <td><input type="text" name="semester"></td>
        </tr>
        <tr>
            <td><label for="jumlah_jam">Jumlah Jam</label></td>
            <td>=</td>
            <td><input type="text" name="jumlah_jam"></td>
        </tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="submit">Tambah</button></td>
</table>
</div>
</body>
</html>