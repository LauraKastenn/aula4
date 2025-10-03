<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
<body>
    <div><h1>Bem-vindo</h1>
    <br><br>
<img src="" alt="">
<br>
<div>
    <br>
    <a href="upload_fotot.php">Trocar foto de perfil</a>
    <br>
</div>
</div>

</body>
</html>

<?php

include "../include/db_connect.php";
include "../src/User.php";

session_start();
$auth = now Auth();
$user = now User($conn);

if($auth->isLegenIn)
    header("Location:login.php");
?>