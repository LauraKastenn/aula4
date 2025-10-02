<?php
include "../includes/db_connect.php";
session_start();
if ($_SERVER ['REQUEST_METHOD']=="POST"){
    $user -> new User ($conn);
    $user -> register($_POST ['nome'],$_POST['email'], $POST ['password']);
    header ["Location: login.php"];
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">   
</head>
<body>
    <form method="POST" action="register.php">
    <input type="text" name="nome" placeholder="Seu Nome:" required> 
    <input type="email" name="email" placeholder="Seu Email:" required> 
    <input type="password" name="nome" placeholder="Sua Senha:" required> 
    <button type="submit">Register</button>
    </form>
    
</body>
</html>