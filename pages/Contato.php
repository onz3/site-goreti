<?php
    include_once('Header.php');
?>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo-inicio.css">

  </head>


  

    <div id='contact' class='container-fluid bg-grey'>
      <h2 class='text-center'>CONTATO</h2>
      <div class='row'>
        <div class='col-sm-5'>
          <p><h3 style="color: #000000">Informações</h3></p>
          <p style="color: #000000"><span class='glyphicon glyphicon-map-marker'></span> R. Francisco Glicério, nº475, Pindammonhangaba-SP ou acesse pelo <a href="https://www.google.com/maps/@-22.9222624,-45.4677915,3a,75y,312.75h,91.69t/data=!3m6!1e1!3m4!1sMxDsviAgT-DhE5l4ekTJ8w!2e0!7i13312!8i6656">Google Maps</a></p>
          <p style="color: #000000"><span class='glyphicon glyphicon-phone'></span> (12) 99788563</p>
          <p style="color: #000000"><span class='glyphicon glyphicon-envelope'></span> mgm.sma@gmail.com</p>

          <p><h3 style="color: #000000">Redes Sociais</h3></p>
          <a href="https://www.facebook.com/mariagoreti.marques/timeline?lst=100002786503950%3A100003254053625%3A1550085242"> <img src="img/faceicon.png" class="img-rounded" width="30" height="30" alt="Facebook"/></a>
          <a href="https://instagram.com/mariagoreti.marques?utm_source=ig_profile_share&igshid=femdob6al8n3"> <img src="img/instaicon.png" class="img-rounded" width="30" height="30" alt="Instagram"/></a>
          <a href="https://www.youtube.com/?gl=BR&hl=pt"> <img src="img/youtubeicon.png" class="img-rounded" width="30" height="30" alt="Youtube"/></a>
        </div>



        <form method="POST" action="enviaEmail.php">
        <div class='col-sm-7 '>
          <div class='row'>
            <div class='col-sm-6 form-group'>
              <input class='form-control' id='name' name='nome' placeholder='Nome' type='text' required />
            </div>
            <div class='col-sm-6 form-group'>
              <input class='form-control' id='email' name='email' placeholder='Email' type='text' required />
            </div>
          </div>
          <textarea class='form-control' id='comments' name='mensagem' placeholder='Mensagem' rows='5'></textarea><br />
          <div class='row'>
            <div class='col-sm-12 form-group'>
              <input class='btn btn-success pull-right' value="Enviar" style="color: #fff; background-color: #2ecc71" type='submit'>
            </div>
          </div>
        </div>
        </form>
      </div>
      </div>






      <footer class="container-fluid text-center">
      <p>Desenvolvido por<i> onz3dev@gmail.com</i></p>
      </footer>


      </html>
