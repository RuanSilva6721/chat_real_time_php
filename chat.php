<?php 
include_once 'config/conexao.php';
$sql = $conn->query("SELECT * FROM chat1");

foreach($sql->fetchAll() as $key){
    echo "<p id='message' class='alert alert-success' role='alert'>".$key['nome'].": ".$key['mensagem']."</p>";
} 