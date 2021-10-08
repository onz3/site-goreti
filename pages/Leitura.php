<?php
include("conexao.php");
include("Header.php");
$id = $_GET['id'];
//$strSQL = "SELECT * FROM posts WHERE id = '$id'";
//$rs = mysqli_query($strSQL);

$consulta = "SELECT * FROM posts where id = '$id'";
$con = $conecta -> query($consulta) or die($conecta->error);



?>

<html>
<head>
  <title>Maria Goreti</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo-inicio.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>




<body>  
<div class="container-fluid">    
  <div class="row content">
    <?php while ($dado = $con -> fetch_array()) {  ?>
    <div style="padding-left: 150px; padding-right: 150px;" id="top"> 
      <h2 class="text-center"><b><?php echo $dado["titulo"];  ?></b></h2>
      <p style="text-align: justify;"><i><?php echo $dado["descricao"];  ?> </br> Postado em: <?php echo $dado["data"];  ?></i></p>
      <hr>
      
      <p style="text-align: justify;"><?php echo nl2br($dado["conteudo"]); ?></p>
    </div>
    
  </div>
</div>
<?php } 

?>


<footer class="container-fluid text-center">
     <a href="#top" title="To Top">
     <span class="glyphicon glyphicon-chevron-up"></span>
     </a>
     <p>Desenvolvido por<i> onz3dev@gmail.com</i></p>
</footer>

</body>
</html>


