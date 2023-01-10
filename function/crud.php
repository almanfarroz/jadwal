<?php
include 'config/koneksi.php';

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    // masukin data ke dalam variabel
    $hari = $data["hari"];
    $slot_waktu = $data["slot_waktu"];
    $kelas = $data["kelas"];
    $dosen = $data["dosen"];
    $ruang = $data["ruang"];
    $mata_kuliah = $data["mata_kuliah"];
    $tahun_ajaran = $data["tahun_ajaran"];
    $semester = $data["semester"];
    $jumlah_jam = $data["jumlah_jam"];

    $query = "INSERT INTO jadwal
                VALUES
                ('', '$hari', '$slot_waktu', '$kelas', '$dosen', '$ruang', '$mata_kuliah', '$tahun_ajaran', '$semester', '$jumlah_jam')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>