<?php
require 'config.php';
include('includes/header.php');

$sql = "SELECT * FROM clientes ORDER BY id DESC";

$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="row">
<div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Idade</th>
        </tr>
        </thead>

        <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                    echo"<tr>";

                    echo "<td>". $user_data['id']. "</td>";
                    echo "<td>". $user_data['nome']. "</td>";
                    echo "<td>". $user_data['sobrenome']. "</td>";
                    echo "<td>". $user_data['email']. "</td>";
                    echo "<td>". $user_data['idade']. "</td>";
                
                    echo "<td>
                        <a class='btn btn-sm btn-primary' href='delete.php?id=$user_data[id]'>                       
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                            </svg>
                        </a>
                        </td>";
                   
                    echo "</tr>";
                    }
                ?>
                
        </tbody>
        <div>
        <button type="submit" class="btn">ADICIONAR</button>    
        </div>
                
</body>
</html>




