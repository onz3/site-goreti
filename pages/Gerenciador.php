<?php
include('config.php');
if(!isset($_SESSION['login_user'])){
header("location: Login.php"); // Redirecting To Login Page
}
?>
<head>
  <title>Dra. Maria Goreti</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-png" href="img/leaf.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>  
  <style>
    .btn-group-vertical{
      padding-left: 430px;    
      width: 700px;
    }

  </style>

<body style="background-image: url('img/img1.jpg');">
</br>
</br>
</br>

<div class="container">
  <h2><center><b>Menu</b></center></h2>
  <div class="btn-group-vertical">
    <a href="Editor.php" class="btn btn-lg btn-success" style="color: #fff; background-color: #2ecc71">Adicionar matéria</a>
    <a href="exibir.php" class="btn btn-lg btn-success" style="color: #fff; background-color: #2ecc71">Gerenciar matérias</a>
    <a href="logout.php" class="btn btn-lg btn-success" style="color: #fff; background-color: #2ecc71">Sair</a>
  </div>
</div>



</body>
</html>
