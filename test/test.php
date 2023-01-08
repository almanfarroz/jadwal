 <?php
  $username=$_POST['username'];
  $password=$_POST['pwd'];

  if (isset($_POST['submit'])) {
    if (($username == "alman" && $password == "mantap")) {
      header("Location: admin.php"); 
    exit; 
    }
    if (($username == "fahmi" && $password == "mantap")) {
      header("Location: admin.php"); 
    exit; 
    }
    if (($username == "yoga" && $password == "mantap")) {
      header("Location: admin.php"); 
    exit; 
    }
    if (($username == "lutfhi" && $password == "mantap")) {
      header("Location: admin.php"); 
    exit; 

    }else{
      echo "tolong diisi dengan benar";
    }
  } else {
    header("Location: jadwal.php"); 
  }
?>
