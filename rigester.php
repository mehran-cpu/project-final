<?php
include("header.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index.js">
    
</head>
<body class="color">
    <div class="login">
<form method="POST">
    نام کاربری: <input type="text" name="user"><br>
    پسورد: <input type="password" name="pass"><br>
    <input type="submit" name="register" value="ثبت‌نام">
    <input type="submit" name="login" value="ورود">
</form>
    </div>
<?php
$file = 'users.txt';

if (isset($_POST['register'])) {
    file_put_contents($file, $_POST['user'].':'.$_POST['pass']."\n", FILE_APPEND);
    echo "ثبت‌نام انجام شد!";
}

if (isset($_POST['login'])) {
    $users = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($users as $u) {
        if ($_POST['user'] == explode(":", $u)[0] && $_POST['pass'] == explode(":", $u)[1]) {
            echo "ورود موفقیت‌آمیز!";
            exit;
        }
    }
    echo "نام کاربری یا پسورد اشتباه است!";
}
?>    
</body>
</html>

<?php
include("footer.php")
?>