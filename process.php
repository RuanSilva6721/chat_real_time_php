
    <?php
    include_once 'config/conexao.php';
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $conn->query("INSERT INTO chat1 SET nome ='$nome', mensagem ='$mensagem'");

    header("Location: index.php");

    ?>