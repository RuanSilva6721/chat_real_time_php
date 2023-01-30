<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
    <title>ChatRealTime</title>
</head>
<body>
    <div id="chat">

    </div>
    <form action="post" action="index.php">
        <input type="text" name="nome" id="nome" placeholder="Nome">
        <input type="text" name="mensagem" id="mensagem" placeholder="Mensagem">
        <input type="submit" value="Enviar">

    </form>

    <?php
    include_once 'config/conexao.php';
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    ?>
    
</body>
</html>