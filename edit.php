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
    <title>Update Data Jadwal</title>
</head>
<body>
    <h2>Update Data Mahasiswa</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $jadwal["id"]; ?>">
        <ul>
            <li>
                <label for="hari">Hari =</label>
                <input type="text" name="hari" value="<?= $jadwal["hari"]; ?>">
            </li>
            <li>
                <label for="slot_waktu">Slot Waktu =</label>
                <input type="text" name="slot_waktu" value="<?= $jadwal["slot_waktu"]; ?>">
            </li>
            <li>
                <label for="kelas">Kelas =</label>
                <input type="text" name="kelas" value="<?= $jadwal["kelas"]; ?>">
            </li>
            <li>
                <label for="dosen">Dosen =</label>
                <input type="text" name="dosen" value="<?= $jadwal["dosen"]; ?>">
            </li>
            <li>
                <label for="ruang">Ruang =</label>
                <input type="text" name="ruang" value="<?= $jadwal["ruang"]; ?>">
            </li>
            <li>
                <label for="mata_kuliah">Mata Kuliah =</label>
                <input type="text" name="mata_kuliah" value="<?= $jadwal["mata_kuliah"]; ?>">
            </li>
            <li>
                <label for="tahun_ajaran">Tahun Ajaran =</label>
                <input type="text" name="tahun ajaran" value="<?= $jadwal["tahun_ajaran"]; ?>">
            </li>
            <li>
                <label for="semester">Semester =</label>
                <input type="text" name="semester" value="<?= $jadwal["semester"]; ?>">
            </li>
            <li>
                <label for="jumlah_jam">Jumlah Jam  =</label>
                <input type="text" name="jumlah_jam" value="<?= $jadwal["jumlah_jam"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>