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
    $hari = htmlspecialchars($data["hari"]);
    $slot_waktu = htmlspecialchars($data["slot_waktu"]) ;
    $kelas = htmlspecialchars($data["kelas"]); 
    $dosen = htmlspecialchars($data["dosen"]);
    $ruang = htmlspecialchars($data["ruang"]);
    $mata_kuliah = htmlspecialchars($data["mata_kuliah"]);
    $tahun_ajaran = htmlspecialchars($data["tahun_ajaran"]);
    $semester = htmlspecialchars($data["semester"]);
    $jumlah_jam = htmlspecialchars($data["jumlah_jam"]);

    $query = "INSERT INTO jadwal
                VALUES
                ('', '$hari', '$slot_waktu', '$kelas', '$dosen', '$ruang', '$mata_kuliah', '$tahun_ajaran', '$semester', '$jumlah_jam')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    $query = "DELETE FROM jadwal WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    // masukin data ke dalam variabel
    $id = $data["id"];
    $hari = htmlspecialchars($data["hari"]);
    $slot_waktu = htmlspecialchars($data["slot_waktu"]) ;
    $kelas = htmlspecialchars($data["kelas"]); 
    $dosen = htmlspecialchars($data["dosen"]);
    $ruang = htmlspecialchars($data["ruang"]);
    $mata_kuliah = htmlspecialchars($data["mata_kuliah"]);
    $tahun_ajaran = htmlspecialchars($data["tahun_ajaran"]);
    $semester = htmlspecialchars($data["semester"]);
    $jumlah_jam = htmlspecialchars($data["jumlah_jam"]);

    $query = "UPDATE jadwal SET
                hari = '$hari',
                slot_waktu = '$slot_waktu',
                kelas = '$kelas',
                dosen = '$dosen',
                ruang = '$ruang',
                mata_kuliah = '$mata_kuliah',
                tahun_ajaran = '$tahun_ajaran',
                semester = '$semester',
                jumlah_jam = '$jumlah_jam'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>