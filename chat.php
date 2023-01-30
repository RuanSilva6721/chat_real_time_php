<?php 
include_once 'config/conexao.php';
$sql = $conn->query("SELECT * FROM chat1");

foreach($sql->fetchAll() as $key){
    echo "<h3>".$key['nome']."</h3> :<p>".$key['mensagem']."</p>";
} 