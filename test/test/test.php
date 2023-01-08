 <?php
  $username=$_POST['username'];
  $password=$_POST['pwd'];

  if (isset($_POST['submit'])) {
    if (($username == "alman" && $password == "mantap")) {
      header("Location: /projekutssmt3/admin.php"); 
    exit; 
    }
    if (($username == "fahmi" && $password == "mantap")) {
      header("Location: /projekutssmt3/admin.php"); 
    exit; 
    }else{
      echo "tolong diisi dengan benar";
    }
  }
?>
