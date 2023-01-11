<?php
include 'config/koneksi.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
 header("Location: admin.php");
}
if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);
 if ($password == $cpassword) {
 $sql = "SELECT * FROM users WHERE email='$email'";
 $result = mysqli_query($conn, $sql);
 if (!$result->num_rows > 0) {
 $sql = "INSERT INTO users (username, email, password)
 VALUES ('$username', '$email', '$password')";
 $result = mysqli_query($conn, $sql);
 if ($result) {
 echo "<script>alert('Selamat, registrasi berhasil!')</script>";
 $username = "";
 $email = "";
 $_POST['password'] = "";
 $_POST['cpassword'] = "";
 } else {
 echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
 }
 } else {
 echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
 }

 } else {
 echo "<script>alert('Password Tidak Sesuai')</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/styleregister.css">
 <title>PT. Xyz</title>
</head>
<body>
 <div class="center">
 <form id="form" method="POST" class="login-email">
 <h1>Register</h1>

 <div class="txt_field">
 <input type="text" placeholder="Username" name="username" value="<?php echo
$username; ?>" required>
 </div>

 <div class="txt_field">
 <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"
required>
 </div>
 
 <div class="txt_field">
 <input type="password" placeholder="Password" name="password" value="<?php echo
$_POST['password']; ?>" required>
 </div>

 <div class="txt_field">
 <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php
echo $_POST['cpassword']; ?>" required>
 </div>

 <div class="input-group">
 <button name="submit" class="btn1">Register</button>
 </div>
 <p class="login-register-text" style="text-align:center">Anda sudah punya akun? <a href="login.php">Login </a></p>
 </form>
 </div>
</body>
</html>