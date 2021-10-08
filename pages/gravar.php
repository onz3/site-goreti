<?php
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];


$strcon = mysqli_connect('db773957428.hosting-data.io','dbo773957428','Aguia019$$$','db773957428') or die('Erro ao conectar com o banco de dados');
$sql = "INSERT INTO posts (titulo,descricao,conteudo,data) VALUES ('$titulo', '$descricao', '$conteudo', '$data')";
mysqli_query($strcon,$sql) or die("Erro ao tentar enviar artigo");
mysqli_close($strcon);
echo "Artigo enviado com sucesso!";
header ("location: exibir.php");
?>