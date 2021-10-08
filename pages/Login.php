<?php
include('config.php'); // Includes Login Script
include('css/estilo-login.css');
if(isset($_SESSION['login_user'])){
header("location: Gerenciador.php"); // Redirecting To Profile Page
}
?>
<head>
<title>Dra. Maria Goreti</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="estilo-login.css">
<link rel="shortcut icon" type="image/x-png" href="img/leaf.png">
</head>

<body style="background-image: url('img/img1.jpg');">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h4><b>Login</b></h4>
    </div>

    <!-- Login Form -->
    <form action="" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="usuário">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="**********">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
      <span><?php echo $error; ?></span>
    </form>
  </div>
</div>
</body>