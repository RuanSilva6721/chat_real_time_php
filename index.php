<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>ChatRealTime</title>
</head>
<body>
    <div id="chat">

    </div>
    <form method="post" action="process.php">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o seu Nome" >
  </div>
  <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea name="mensagem" class="form-control" id="mensagem" rows="3" placeholder="Digite a sua Mensagem" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    
</body>
</html>