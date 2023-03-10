<?php
    include 'config/koneksi.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    $query = "SELECT * FROM jadwal";

    $hari = isset($_GET["hari"]) ? $_GET["hari"] : "";
    $kelas = isset($_GET["kelas"]) ? $_GET["kelas"] : "";  
    $ruang = isset($_GET["ruang"]) ? $_GET["ruang"] : "";  
    $mata_kuliah = isset($_GET["mata_kuliah"]) ? $_GET["mata_kuliah"] : "";  
    $nama_dosen = isset($_GET["nama_dosen"]) ? $_GET["nama_dosen"] : "";  

    if($hari != "" || $kelas != ""  || $ruang != ""  || $mata_kuliah != ""  || $nama_dosen != ""){
        $query .= " WHERE ";

        if($hari != ""){
            $queryLike[] = "hari LIKE '%$hari%'";
        }
        if($kelas != ""){
            $queryLike[] = "kelas LIKE '%$kelas%'";
        }
        if($ruang != ""){
            $queryLike[] = "ruang LIKE '%$ruang%'";
        }
        if($mata_kuliah != ""){
            $queryLike[] = "mata_kuliah LIKE '%$mata_kuliah%'";
        }
        if($nama_dosen != ""){
            $queryLike[] = "dosen LIKE '%$nama_dosen%'";
        }
        $query .= implode(" AND ", $queryLike);
    }

    include 'function/crud.php';
    include 'function/test.php';
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
        <link rel="stylesheet" href="css/upload.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/pagination.css">
        <title>Jadwal Perkuliahan Teknik Informatika</title>
    </head>
    <body style="background-image: url(images/foto.jpg); background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
        <div class="body">
            <div class="header">
                <h2>JADWAL PERKULIAHAN</h2>
                <!-- <button class="button-1">Admin</button> -->
                <a href="logout.php" class="button-1">Log Out</a>
            </div>

            <div class="content">
                <?php echo "<h2>SELAMAT DATANG DI WEBSITE JADWAL MATA KULIAH TEKNIK INFORMATIKA, " . $_SESSION['username'] ."!". "</h2>"; ?>
                <br>
                
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="m-4">
                        <input type="file" id="file" name="fileToUpload" class="custom-file-input" />
                        <button type="submit" name="upload" class="bg-slate-50 border-black border-2 hover:bg-black hover:text-white text-black font-bold py-2 px-4 " id="tambahButton" style="background: #2691d9;border-radius: 10px;padding: 10px 20px; text-align:center; margin-top: 7px;color: #fff;margin-right: 20px;">
                            Upload Excel
                        </button>
                    </div>
                </form>
                <br>

                <a style="background-color: #2691d9;border: 1px solid black;padding: 10px 20px;border-radius: 50px; text-decoration:none;color:#fff;" href="tambah.php">Tambah Data</a>
                <br><br>
                
                <form method="get" align="center" class="search" style="margin:auto; margin-top:10px;display:grid; grid-template-columns: auto auto auto;">
                    <input type="text" style="margin-bottom: 10px;" class="form-control" name="hari" id="hari" placeholder="Pencarian Hari" autocomplete="off" value="<?= $hari ?>">

                    <input type="text" style="margin-bottom: 10px;" class="form-control" name="kelas" id="kelas" placeholder="Pencarian Kelas" autocomplete="off" value="<?= $kelas ?>">

                    <input type="text" style="margin-bottom: 10px;" class="form-control" name="ruang" id="ruang" placeholder="Pencarian Ruang" autocomplete="off" value="<?= $ruang ?>">

                    <input type="text" style="margin-bottom: 10px;" class="form-control" name="mata_kuliah" id="mata_kuliah" placeholder="Pencarian Mata Kuliah" autocomplete="off" value="<?= $mata_kuliah ?>">
                
                    <input type="text" style="margin-bottom: 10px;" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Pencarian Dosen" autocomplete="off" value="<?= $nama_dosen ?>">
                
                    <button type="submit" name="cari" value="cari" style="width: 80%;">Cari</button>    
                </form>
                
                <br><br>
                
                <table border="2" align="center">
                    <thead>
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
                        // pagination
                        if(isset($_GET['page']))
                            $page=$_GET['page'];
                        else
                            $page = 1;
                        
                        $total =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM jadwal"));
                        $jumlah_baris =20;
                        $jumlah_page = $total/$jumlah_baris;
                        $offset = ($page-1)*$jumlah_baris;
                        //page 1 -> offset 0
                        //page 2 -> offset 10
                        //page 3 -> offset 20

                        $value = mysqli_query($conn, "$query LIMIT $jumlah_baris OFFSET $offset ");
                    ?>
                    <?php foreach ($value as $value) : ?>
                        <tbody style="height: 3vh;">
                            <tr>
                                <td><?php echo $value ['id']; ?></td>
                                <td><?php echo $value ['hari']; ?></td>
                                <td><?php echo $value ['slot_waktu']; ?></td>
                                <td><?php echo $value ['kelas']; ?></td>
                                <td><?php echo $value ['dosen']; ?></td>
                                <td><?php echo $value ['ruang']; ?></td>
                                <td><?php echo $value ['mata_kuliah']; ?></td>
                                <td><?php echo $value ['tahun_ajaran']; ?></td>
                                <td><?php echo $value ['semester']; ?></td>
                                <td><?php echo $value ['jumlah_jam']; ?></td>
                                <td><a href="edit.php?id=<?= $value['id']?>">Ubah</a> | <a href="hapus.php?id=<?= $value['id']?>" class="text-danger">Hapus</a></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                <br /><br />
                <div class="pagination">
                    <?php

                    $paginateQuery = "";
                    $paginateQuery .= $hari != "" ? "&hari=$hari" : "";
                    $paginateQuery .= $kelas != "" ? "&kelas=$kelas" : "";
                    $paginateQuery .= $ruang != "" ? "&ruang=$ruang" : "";
                    $paginateQuery .= $mata_kuliah != "" ? "&mata_kuliah=$mata_kuliah" : "";
                    $paginateQuery .= $nama_dosen != "" ? "&nama_dosen=$nama_dosen" : "";
                    // URL sesuai dengan nama project
                    echo '<a href="admin.php?page='.($page-1).($paginateQuery).'">&laquo;</a>';
                    if($page<=3){
                        for($i=1;$i<=5;$i++){
                            if($page == $i)
                                echo '<a class="active" href="admin.php?page='.($i).($paginateQuery).'">'.($i).'</a>';
                            else
                                echo '<a href="admin.php?page='.($i).($paginateQuery).'">'.($i).'</a>';
                        }
                    }
                    else{
                        for($i=$page-2;$i<=$page+2;$i++){
                            if($page == $i)
                                echo '<a class="active" href="admin.php?page='.($i).($paginateQuery).'">'.($i).'</a>';
                            else
                                echo '<a href="admin.php?page='.($i).($paginateQuery).'">'.($i).'</a>';
                            }
                    }
                    echo '<a href="admin.php?page='.($page+1).'">&raquo;</a>';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

