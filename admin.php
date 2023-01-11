<?php

include 'config/koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
 header("Location: login.php");
}
include 'function/crud.php';

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
                <div class="pil">
                    <button value="kelas"  onclick="location.href='?sort=kelas';">Kelas</button>
                    <button value="dosen" onclick="location.href='?sort=dosen';">Dosen</button>
                    <button value="hari" onclick="location.href='?sort=hari';">Hari</button>
                </div>
                  <!-- <?php

  if($_POST['sort']=='dosen')
  {
      $keys = array_column($value, 'dosen');
      array_multisort($keys, SORT_ASC, $value);
  }
  else if($_POST['sort']=='hari')
  {
      $keys = array_column($value, 'hari');
      array_multisort($keys, SORT_DESC, $value);
  }
  else if($_POST['sort']=='kelas')
  {
      $keys = array_column($value, 'kelas');
      array_multisort($keys, SORT_ASC, $value);
  }
?>   -->
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
            <form method="post" align="center" class="search" style="margin:auto;max-width:300px; margin-top:10px">
    <input type="text" name="inputan" placeholder="cari...">
    <button type="submit" name="cari" value="cari"><i class="fa fa-search"></i></button><br>
  </form>

    <?php
    function search($arr, $query){$no=1;
        foreach ($arr as $value):
        foreach($value as $data):
            if(str_contains($data, $query)):
    ?>
    <tbody style="height: 3vh;">
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value["hari"] ?></td>
        <td><?= $value["slot_waktu"] ?></td>
        <td><?= $value["kelas"] ?></td>
        <td><?= $value["dosen"] ?></td>
        <td><?= $value["ruang"] ?></td>
        <td><?= $value["mata_kuliah"] ?></td>
        <td><?= $value["tahun_ajaran"] ?></td>
        <td><?= $value["semester"] ?></td>
        <td><?= $value["jumlah_jam"] ?></td>
        <td>
        <a href="finput_book.php?id=<?php $value['id'] ?>">Ubah</a>
        <a href="delete_book.php?id=<?php $value['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php break;?>
    </tbody>

    <?php 
        endif;
        endforeach;
        endforeach;
    }  
    ?>
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
					
					?>

                    <?php
                    //$value = mysqli_query($conn, "SELECT * FROM jadwal");

                    $value = mysqli_query($conn, "SELECT * FROM jadwal limit $jumlah_baris offset $offset ");

                    ?>
                    <?php if (isset($_POST['cari'])) {search($value, $_POST['inputan']);}else {?>
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
                    <?php }; ?>
                    </table>
					
					<br /><br />
                    <div class="pagination">

                        <?php 
                        echo '<a href="/jadwal/admin.php?page='.($page-1).'">&laquo;</a>';

                        for($i=0;$i<$jumlah_page;$i++){
                            if($page == $i+1)
                                echo '<a class="active" href="/jadwal/admin.php?page='.($i+1).'">'.($i+1).'</a>';
                            else
                                echo '<a href="/jadwal/admin.php?page='.($i+1).'">'.($i+1).'</a>';
                        }

                        echo '<a href="/jadwal/admin.php?page='.($page+1).'">&raquo;</a>';
                        
                        ?>

                        <!--
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">&raquo;</a>
                        -->
                        
                    </div> 
            </div>
        </div>
           
    </body>
</html>

