<?php 

require_once('db.class.php');

$user = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$DB = new db();

$link = $DB->conecta_mySQL();


$sql = "insert into usuarios(usuario, email, senha) values('$user', '$email', '$senha')";


if(mysqli_query($link, $sql)){
    echo "Usuario registrado com sucesso!";
} else {
    echo "Erro ao registra o usuario";
}



?>