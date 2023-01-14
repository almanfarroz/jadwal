<?php
session_start();
require 'vendor/autoload.php';
require_once "config/koneksi.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['upload'])) {
    $allowed_ext = ['xls', 'csv', 'xlsx'];
    $fileName = $_FILES['fileToUpload']['name'];
    $checking = explode(".", $fileName);
    $file_ext = end($checking);

    if (in_array($file_ext, $allowed_ext)) {
        $targetPath = $_FILES['fileToUpload']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($targetPath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach ($data as $value) {
            $id = $value['0'];
            $hari = $value['1'];
            $slot_waktu = $value['2'];
            $kelas = $value['3'];
            $dosen = $value['4'];
            $ruang = $value['5'];
            $mata_kuliah = $value['6'];
            $tahun_ajaran = $value['7'];
            $semester = $value['8'];
            $jumlah_jam = $value['9'];

            $checkSchedule = "SELECT id FROM jadwal WHERE id ='$id'";
            $checkSchedule_result = mysqli_query($conn, $checkSchedule);

            if (mysqli_num_rows($checkSchedule_result) > 0) {
            } else {
                $in_query = "INSERT INTO jadwal(hari, slot_waktu, kelas, dosen, ruang, mata_kuliah, tahun_ajaran, semester, jumlah_jam ) VALUES('$hari', '$slot_waktu', '$kelas' , '$dosen', '$ruang' ,'$mata_kuliah', '$tahun_ajaran', '$semester', '$jumlah_jam')";
                $in_result = mysqli_query($conn, $in_query);
            }
        }

        if (isset($msg)) {
            $_SESSION['status'] = "File imported successfully";
            header("Location: admin.php");
        } else {
            $_SESSION['status'] = "File importing failed";
            header("Location: admin.php");
        }
    } else {
        $_SESSION['status'] = "invalid file";
        header("Location: admin.php");
        exit(0);
    }
}