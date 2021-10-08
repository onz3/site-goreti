<?php
// Redirecting To Login Page
include('config.php');
if(!isset($_SESSION['login_user'])){
header("location: Login.php"); 
}


include("conexao.php");
$id = $_GET['id'];
$result="SELECT * FROM posts WHERE id='$id'";
$result_post=mysqli_query($conecta, $result);
$row_post = mysqli_fetch_assoc($result_post);
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
  <h4></h4>
  <form name="gravar" action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row_post['id']; ?>">
    <div class="form-group">
      <label for="titulo"><b>Título:</b></label>
      <input name="titulo" type="text" class="form-control" rows="1" value="<?php echo $row_post['titulo']; ?>">
    </div>
    <div class="form-group">
      <label for="descricao"><b>Descrição:</b></label>
      <input name="descricao" type="text" class="form-control" rows="1" value="<?php echo $row_post['descricao']; ?>">
    </div>
    <div class="form-group">
      <label for="conteudo"><b>Conteúdo:</b></label>
      <textarea style="height: 500px;" name="conteudo" class="form-control" rows="15"><?php echo $row_post['conteudo']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="data"><b>Data:</b></label>
      <input name="data" type="date" class="form-control" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" maxlength="10" autocomplete="off" value="<?php echo $row_post['data']; ?>">
    </div>
  <button class="btn btn-success" name="alterar">Alterar</button>
</form>
</br>
</br>
</div>



</body>
</html>
