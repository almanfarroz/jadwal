<?php
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
 header("Location: berhasil_login.php");
}
if (isset($_POST['submit'])) {
 $email = $_POST['email'];
 $password = md5($_POST['password']);
 $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 if ($result->num_rows > 0) {
 $row = mysqli_fetch_assoc($result);
 $_SESSION['username'] = $row['username'];
 header("Location: berhasil_login.php");
 } else {
 echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="alert alert-warning" role="alert">
 <?php echo $_SESSION['error']?>
 </div>
    <div class="center">
        <br>
        <img src="images/pnj.jpg" alt="logo" style="width:100px;height:100px;">
        <h1>Login</h1>

    <form action="hasil.php" method="POST" class="login-email">
        <div class="txt_field">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"
required>
        <span></span>
        <label for="user">Email</label>
        </div>

        <div class="txt_field">
        <input type="password" placeholder="Password" name="password" value="<?php echo
$_POST['password']; ?>" required>
        <span></span>
        <label for="password">Password</label>
        </div>

        <div class="txt_field">
        <img src="gambar.php" alt="gambar"/>
        <input name="nilaiCaptcha" value="" maxlength="<?php echo
        $_POST['password']; ?>" required>
        </div>
        
        <input type="submit" name="submit" style="margin: 5px" class="btn1">
        <h2>Or</h2>
        <input type="submit" value="Login as User" class="btn2">
        <!-- <a href="jadwal.php" class="btn2">Login as user</a> -->
        <p style="text-align:center" class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>

    </form>
    <br>
</div>
</body>
</html>