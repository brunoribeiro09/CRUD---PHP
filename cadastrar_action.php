<?php

require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$email = filter_input(INPUT_POST, 'email');
$idade = filter_input(INPUT_POST, 'idade');


$sql = $conexao->prepare("INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$email', '$email', '$idade')");
$sql->bindValue(':nome', $nome);
$sql->bindValue(':sobrenome', $sobrenome);
$sql->bindValue(':email', $email);
$sql->bindValue(':idade', $idade);
$sql->execute();

header("Location: index.php");
