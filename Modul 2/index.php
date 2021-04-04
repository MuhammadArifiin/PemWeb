<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo "<script>alert('Username lebih dari 7');</script>";
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "<script>alert('Password kapital');</script>";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "<script>alert('Password kecil');</script>";
            $x = true;
        }

        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "<script>alert('Password special character');</script>";
            $x = true;
        }

        if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('Password angka');</script>";
            $x = true;
        }
        if($pass<10){
            echo "<script>alert('Password kurang dari 10');</script>";
            $x = true;
        }
        if( $x == false ){
            echo "<script>alert('Berhasil');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
        background-repeat: no-repeat;
        height : 600px;
        }
    </style>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table border="0" align="center">
        <tr>
        <td colspan="2" align="center"></td>
        </tr>
        <tr>
        <td colspan="2" align="center"><h3>LOGIN</h3></td>
        </tr>
        <tr>
        <td align="right">Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        </tr>
        <tr>
        <td align="right">Password : </td>
        <td><input name="password" type="password" placeholder="Password" ></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>