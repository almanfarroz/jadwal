<?php
include 'config/koneksi.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
 header("Location: admin.php");
}
if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $captcha = $_POST["captcha"];
 $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 
 if ($captcha == $_SESSION["captcha"]){
    echo "";
 } else {
    echo "<script>alert('Captcha Anda salah. Silahkan coba lagi!')</script>";
 }

 if ($result->num_rows > 0){
    echo "";
 } else {
    echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
 }
 
 if ($result->num_rows > 0 && $captcha == $_SESSION["captcha"]) {
 $row = mysqli_fetch_assoc($result);
 $_SESSION['username'] = $row['username'];
 header("Location: admin.php");
 } else {
 echo "";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <title>PT. Xyz</title>
 <style>
    body{
        background-image: url(images/foto.jpg);
    }
 </style>
</head>
<script>
    var xhttp = false;
    if(window.XMLHttpRequest){
        xhttp = new XMLHttpRequest();
    }else if(window.ActiveXObject){
        xhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
    }

    function login(){
        xhttp.responseText;
        xhttp.abort();
        xhttp.onreadystatechange=function(){
            if(xhttp.readyState == 4 && xhttp.status == 200){
                document.getElementById('pesan').innerHTML = xhttp.responseText;
            }
        }

        var username=document.getElementById('username').value;
        var password=document.getElementById('password').value;
        var captcha=document.getElementById('captcha').value;
        xhttp.open("GET", "http://localhost/jadwal/login.php?u="+username+"$password="+password+"$captcha="+captcha, true);
        xhttp.send(nuLL);
    }

</script> 
<body>
 </div>

    <div class="center">
        <br>
        <img src="images/pnj.jpg" alt="logo" style="width:100px;height:100px;">
        <h1>Login</h1>

    <form method="POST" id="form" >
        <div class="txt_field">
        <input type="username" placeholder="Username" name="username" required>
        <span></span>
        <label for="user">Username</label>
        </div>

        <div class="txt_field">
        <input type="password" placeholder="Password" name="password" required>
        <span></span>
        <label for="password">Password</label>
        </div>

        <div class="">
        <img src="function/captcha.php" alt="captcha" class="captcha-image">
        </div>

        <div class="txt_field">
        <input type="text" name="captcha" id="captcha" class="form-control" required>
        <span></span>
        <label for="captcha">Captcha</label>
        </div>
        
        <input type="submit" name="submit" style="margin: 5px" class="btn1">
        <h2>Or</h2>
        <a href="jadwal.php" style="width: 100%;height: 50px;border: 1px solid;background: #2691d9;border-radius: 25px;font-size: 18px;color: #e9f4fb; font-weight: 700;cursor: pointer;outline: none;text-decoration:none;padding:10px 98px; text-align:center;" href="tambah.php">Login as User</a>
        <br><br>
        <p style="text-align:center" class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>

    </form>
    <br>
</div>
</body>
</html>