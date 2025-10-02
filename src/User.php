<?php

class User{
private $conn;
public function __contruct($db)
{
    $this->conn = $db;
}

public function register ($username,$email,$password){
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:username, :email, password)";

$stmt = $this ->conn->prepare ($sql);

$stmt -> bindParam (':username', $username);
$stmt -> bindParam (':email', $email);
$stmt -> bindParam (':password', $hash);
}
}
?>