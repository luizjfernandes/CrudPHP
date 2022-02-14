<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email =  filter_input(INPUT_POST, 'email' FILTER_VALIDATE_EMAIL);

if($nome && $email){  
    
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email', $email);

    if($sql->romCount() === 0){

$sql = $pdo->prepare("INSERT * INTO usuario (nome, Email) VALUES (:nome, :email)");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':email', $email);
$sql->execute();

header ("Location: index.php");
exit;
    }
} else {
    header("Localition: cadastrar.php");
}
else {
    header("Localition: cadastrar.php");
}
?>