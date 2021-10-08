<?php
    include('Header.php');
    include('conexao.php');
    $consulta = "SELECT * FROM posts";
    $con = $conecta -> query($consulta) or die($conecta->error);
?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo-inicio.css">

  </head>


    <div class='container-fluid'>

      <div class='text-center' id="top">
        <h2>Matérias</h2>
        <h4>Matérias sobre Fisioterapia</h4>
      </div>




      <?php while ($dado = $con -> fetch_array()) {  ?>
      <div class='row ' style="padding-left: 40px;">
        <div class='col-sm-4 col-xs-12'>
          <div class='panel panel-default text-center'>
            <div class='panel-heading'>
              <h1><?php echo $dado["titulo"];  ?></h1>
            </div>
            <div class='panel-footer'>
              <h3 style="color: #000000"><?php echo $dado["descricao"];  ?></h3>
              <form method="post">
              <input type="hidden" id="campo" value=" <? echo $id; ?>" > 
              </form>
              <form action="Leitura.php" method="GET">
              <a href="Leitura.php?id=<?php echo $dado['id']; ?>" class='btn btn-lg'>Ler</a>
            </form>
            </div>
          </div>
        </div>
      </div>


      <?php  }  ?>

    </div>



    <footer class="container-fluid text-center">
     <a href="#top" title="To Top">
     <span class="glyphicon glyphicon-chevron-up"></span>
     </a>
     <p>Desenvolvido por<i> onz3dev@gmail.com</i></p>
    </footer>



    </html>

    
