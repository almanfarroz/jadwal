<?php
include 'config/koneksi.php';
include 'function/crud.php';

// mengambil data dari url
$id = $_GET["id"];

$jadwal = query("SELECT * FROM jadwal WHERE id = $id")[0];

// menampilkan konfirmasi update data
if ( isset($_POST["submit"]) ) {

    // info data berhasil diinput
    if ( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diupdate !');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate !');
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
        <title>Update Data Jadwal</title>
    </head>
    <body>
    <div class="container">
        <h1>Update Data Mahasiswa</h1>
    <table>
        <tr>
            <td><label for="hari">Hari</label></td>
            <td>=</td>
            <td><input type="text" name="hari" value="<?= $jadwal["hari"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="kelas">Kelas</label></td>
            <td>=</td>
            <td><input type="text" name="kelas" value="<?= $jadwal["kelas"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="dosen">Dosen</label></td>
            <td>=</td>
            <td><input type="text" name="dosen" value="<?= $jadwal["dosen"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="ruang">Ruang</label></td>
            <td>=</td>
            <td><input type="text" name="ruang" value="<?= $jadwal["ruang"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="mata_kuliah">Mata Kuliah</label></td>
            <td>=</td>
            <td><input type="text" name="mata_kuliah" value="<?= $jadwal["mata_kuliah"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="tahun_ajaran">Tahun Ajaran</label></td>
            <td>=</td>
            <td><input type="text" name="tahun_ajaran" value="<?= $jadwal["tahun_ajaran"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="semester">Slot Waktu</label></td>
            <td>=</td>
            <td><input type="text" name="semester" value="<?= $jadwal["semester"]; ?>"></td>
        </tr>
        <tr>
            <td><label for="jumlah_jam">Jumlah Jam</label></td>
            <td>=</td>
            <td><input type="text" name="jumlah_jam" value="<?= $jadwal["jumlah_jam"]; ?>"></td>
        </tr>
        <td></td>
        <td></td>
        <td><button type="submit" name="submit">Update</button></td>
    </div>
</table>
</body>
</html>