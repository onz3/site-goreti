<?php
include('config.php');
if(!isset($_SESSION['login_user'])){
header("location: Login.php"); // Redirecting To Login Page
}
include("conexao.php");
$consulta = "SELECT * FROM posts";
$con = $conecta -> query($consulta) or die($conecta->error);

?>
<html>
<head>
<title>Dra. Maria Goreti</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo-lista.css">
<link rel="shortcut icon" type="image/x-png" href="img/leaf.png">
</head>


<body style="background-image: url('img/img1.jpg');">
</br>
</br>
</br>
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel" style="background-color: #2ecc71">
                <div class="panel-heading" style="color: #fff">
                    <span class="glyphicon glyphicon-list"></span><b>Artigos</b>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php while ($dado = $con -> fetch_array()) {  ?>
                        <li class="list-group-item">
                            <div class="checkbox">
                                <label >
                                   <?php echo $dado["titulo"];  ?>
                                </label> 
                            </div>      

                        <div class="pull-right action-buttons"> 
                            <form method='POST' action='Excluir.php'>
                            <input type='hidden' name='excluir' value= <?php echo $dado["id"]; ?>>
                            <button type='submit' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span></button>
                            </form>
                        </div>
                        <div class="pull-right action-buttons">         
                            <form action="edit.php" method="POST">
                            <a href="Editar.php?id=<?php echo $dado['id']; ?>" class="glyphicon glyphicon-pencil"></a>
                            </form>
                        </div> 
                        </li>
                        <?php  }  ?>
                        
                </ul>
                </div>
            </div>
            <a class="btn" href="Gerenciador.php" style="color: #fff; background-color: #2ecc71"><b>Voltar</b></a>
        </div>
    </div>
</div> 





</body>
</html>



