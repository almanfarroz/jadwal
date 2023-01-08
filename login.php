<?php
include 'config/koneksi.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
 header("Location: jadwal.php");
}
if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $captcha = $_POST["captcha"];
 $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);

 if ($result->num_rows > 0 && $captcha == $_SESSION["captcha"]) {
 $row = mysqli_fetch_assoc($result);
 $_SESSION['username'] = $row['username'];
 header("Location: jadwal.php");
 } else {
 echo "<script>alert('Username atau Password atau Captcha Anda salah. Silahkan coba lagi!')</script>";
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
</head>
<!-- <script>
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
        xhttp.open("GET", "http://localhost/jadwal/jadwal.php?u="+username+"$password="+password+"$nilaiCaptcha="+captcha, true);
        xhttp.send(nuLL);
    }

</script> -->
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
        <label for="captcha">captcha</label>
        </div>
        
        <input type="submit" name="submit" style="margin: 5px" class="btn1">
        <h2>Or</h2>
        <input type="submit" value="Login as User" class="btn2">
        <p style="text-align:center" class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>

    </form>
    <br>
</div>
</body>
</html>