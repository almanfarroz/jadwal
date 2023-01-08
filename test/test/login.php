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
    <div class="center">
        <br>
        <img src="images/pnj.jpg" alt="logo" style="width:100px;height:100px;">
        <h1>Login</h1>
        <form action="test.php" method="post">
        <div class="txt_field">
        <input type="text" name="username">
        <span></span>
        <label for="user">User</label>
        </div>

        <div class="txt_field">
        <input type="password" name="pwd">
        <span></span>
        <label for="password">Password</label>
        </div>

        <input type="submit" name="submit" style="margin: 5px" class="btn1">
        <h2>Or</h2>
        <input type="submit" value="Login in as a user" class="btn2">
    </form>
    <br>
</div>
</body>
</html>