<?php
  session_start();
  include "config/koneksi.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

  $data = mysqli_fetch_assoc($user);
  if($_POST['captcha'] = $_SESSION['captcha']){
    if ($user->num_rows > 1){
        echo "User : " . $user['nama'];
    }
  }
?>

<?php
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
 header("Location: berhasil_login.php");
}
if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $captcha = $_POST["captcha"];
 $user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

 $data = mysqli_fetch_assoc($user);
 if($_POST['captcha'] = $_SESSION['captcha']){
 if ($result->num_rows > 0) {
 $_SESSION['username'] = $row['username'];
 header("Location: berhasil_login.php");
 }
 } else {
 echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
 }
}
?>