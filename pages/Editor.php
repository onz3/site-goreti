<?php
include('config.php');
if(!isset($_SESSION['login_user'])){
header("location: Login.php"); // Redirecting To Login Page
}
?>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>Dra. Maria Goreti</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-png" href="img/leaf.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

</br></br></br></br></br>
<body style="background-image: url('img/img1.jpg');">
<div class="container">
  <h2>Matéria</h2>
  <h4>Preencha todos os campos</h4>
  <form name="gravar" action="gravar.php" method="POST">
    <div class="form-group">
      <label for="titulo"><b>Título:</b></label>
      <input name="titulo" type="text" class="form-control" rows="1">
    </div>
    <div class="form-group">
      <label for="descricao"><b>Descrição:</b></label>
      <input name="descricao" type="text" class="form-control" rows="1">
    </div>
    <div class="form-group">
      <label for="conteudo"><b>Conteúdo:</b></label>
      <textarea  name="conteudo" class="form-control" rows="15"></textarea>
    </div>
    <div class="form-group">
      <label for="data"><b>Data:</b></label>
      <input name="data" type="date" class="form-control" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off">
    </div>
  <button class="btn" style="color: #fff; background-color: #2ecc71"><b>Gravar</b></button>
  <a class="btn" href="Gerenciador.php" style="color: #fff; background-color: #2ecc71"><b>Voltar</b></a>
</form>
</br>
</br>
</div>



</body>
</html>
