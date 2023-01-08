<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="search.css">
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
                <?php
 require "data.php";
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
?>

  <br>
  <form method="post" enctype="multipart/form-data" align="center" style="font-size: 14px; margin-left: 70px;">
  Select File:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  </form>

  <form method="post" align="center" class="search" style="margin:auto;max-width:300px">
    <input type="text" name="inputan" placeholder="cari...">
    <button type="submit" name="cari" value="cari"><i class="fa fa-search"></i></button><br>
  </form>
<br>
  <?php
  function search($arr, $query){
    $no=1;
    foreach($arr as $value){
        foreach($value as $data){
            if(str_contains($data, $query)){
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$value['Hari']."</td>";
                echo "<td>".$value['Slot_Waktu']."</td>";
                echo "<td>".$value['Kelas']."</td>";
                echo "<td>".$value['Dosen']."</td>";
                echo "<td>".$value['Ruang']."</td>";
                echo "<td>".$value['Mata_Kuliah']."</td>";
                echo "<td>".$value['Tahun_Ajaran']."</td>";
                echo "<td>".$value['Semester']."</td>";
                echo "<td>".$value['jj']."</td>";
                echo "</tr>";
                $no = $no+1;
                break;
            }
        }

    }
}
?>

    <div class="scroll">
    <table border="2" align="center">
        <th>No</th>
        <th>Hari</th>
        <th>Slot Waktu</th>
        <th>Kelas</th>
        <th>Dosen</th>
        <th>Ruang</th>
        <th>Mata Kuliah</th>
        <th>Tahun Ajaran</th>
        <th>Semester</th>
        <th>Jadwal Jam</th>
      
    <?php
    if (isset($_POST['cari'])) {
      search($jadwal, $_POST['inputan']);
    }else {
      foreach ($jadwal as $value){
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$value['Hari']."</td>";
        echo "<td>".$value['Slot_Waktu']."</td>";
        echo "<td>".$value['Kelas']."</td>";
        echo "<td>".$value['Dosen']."</td>";
        echo "<td>".$value['Ruang']."</td>";
        echo "<td>".$value['Mata_Kuliah']."</td>";
        echo "<td>".$value['Tahun_Ajaran']."</td>";
        echo "<td>".$value['Semester']."</td>";
        echo "<td>".$value['jj']."</td>";
        echo "</tr>";
        $no = $no+1;
      };
    };
  ?>
    </table>
    
    </div>
            </div>
        </div>
    </body>
</html>