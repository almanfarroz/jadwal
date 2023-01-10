<?php
include 'config/koneksi.php';
include 'function/crud.php';
// 
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
    <title>Tambah Data Jadwal</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post">
        <ul>
            <!-- <li>
                <input type="hidden" name="id">
            </li> -->
            <li>
                <label for="hari">Hari =</label>
                <input type="text" name="hari">
            </li>
            <li>
                <label for="slot_waktu">Slot Waktu =</label>
                <input type="text" name="slot_waktu">
            </li>
            <li>
                <label for="kelas">Kelas =</label>
                <input type="text" name="kelas">
            </li>
            <li>
                <label for="dosen">Dosen =</label>
                <input type="text" name="dosen">
            </li>
            <li>
                <label for="ruang">Ruang =</label>
                <input type="text" name="ruang">
            </li>
            <li>
                <label for="mata_kuliah">Mata Kuliah =</label>
                <input type="text" name="mata_kuliah">
            </li>
            <li>
                <label for="tahun_ajaran">Tahun Ajaran =</label>
                <input type="text" name="tahun ajaran">
            </li>
            <li>
                <label for="semester">Semester =</label>
                <input type="text" name="semester">
            </li>
            <li>
                <label for="jumlah_jam">Jumlah Jam  =</label>
                <input type="text" name="jumlah_jam">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>