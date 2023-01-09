<?php

include 'config/koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/search.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Jadwal Perkuliahan Teknik Informatika</title>
        <style>
        .scroll{
          height: 400px;
          overflow: scroll;
        }
        </style>
    </head>
    <body style="background-image: url(img/bgpnj.jpg); background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
        <div class="body">
            <div class="header">
                <h2>JADWAL PERKULIAHAN</h2>
                <!-- <button class="button-1">Admin</button> -->
                <a href="logout.php" class="button-1">Log Out</a>
            </div>
            <div class="content">
                <h2>SELAMAT DATANG DI WEBSITE JADWAL MATA KULIAH TEKNIK INFORMATIKA</h2>
                <div class="pil">
                    <button value="kelas"  onclick="location.href='?sort=kelas';">Kelas</button>
                    <button value="dosen" onclick="location.href='?sort=dosen';">Dosen</button>
                    <button value="hari" onclick="location.href='?sort=hari';">Hari</button>
                </div>
                <!-- <?php

  if($_GET['sort']=='dosen')
  {
      $keys = array_column($jadwal, 'Dosen');
      array_multisort($keys, SORT_ASC, $jadwal);
  }
  else if($_GET['sort']=='hari')
  {
      $keys = array_column($jadwal, 'Hari');
      array_multisort($keys, SORT_DESC, $jadwal);
  }
  else if($_GET['sort']=='kelas')
  {
      $keys = array_column($jadwal, 'Kelas');
      array_multisort($keys, SORT_ASC, $jadwal);
  }
?> -->

  <br>

  <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="m-4">
                    <input type="file" id="file" name="fileToUpload" class="custom-file-input" />
                </div>
                <div>
                    <button type="submit" name="upload" class="bg-slate-50 border-black border-2 hover:bg-black hover:text-white text-black font-bold py-2 px-4 " id="addButton">
                        Upload Excel
                    </button>
                </div>
            </form>

        <div class="outer-wrapper">
            <div class="table-wrapper">

                <table class=" m-auto border-black  border-2 ">
                    <thead class="bg-black  text-white w-full">

                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Slot Waktu</th>
                            <th>Kelas</th>
                            <th>Dosen</th>
                            <th>Ruang</th>
                            <th>Mata Kuliah</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Jumlah Jam</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php 
                    $value = mysqli_query($conn, "SELECT * FROM jadwal");
                    foreach ($value as $value){
                        echo "<tbody>";
                                echo "<td>".$value['id']."</td>";
                                echo "<td>".$value['hari']."</td>";
                                echo "<td>".$value['slot_waktu']."</td>";
                                echo "<td>".$value['kelas']."</td>";
                                echo "<td>".$value['dosen']."</td>";
                                echo "<td>".$value['ruang']."</td>";
                                echo "<td>".$value['mata_kuliah']."</td>";
                                echo "<td>".$value['tahun_ajaran']."</td>";
                                echo "<td>".$value['semester']."</td>";
                                echo "<td>".$value['jumlah_jam']."</td>";
                                echo "<td>"."</td>";
                                echo "</tr>";
                    }
                    echo "</tbody>";

                    ?>

                </table>

            </div>
        </div>
    </body>
</html>

