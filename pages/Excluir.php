<?php
include_once("conexao.php");

 $excluir=$_POST["excluir"];


	$strcon = mysqli_connect('db773957428.hosting-data.io','dbo773957428','Aguia019$$$','db773957428') or die('Erro ao conectar com o banco de dados');
	$sql = "DELETE FROM posts WHERE id='$excluir'";
	$res = mysqli_query($strcon,$sql) or die("Erro ao tentar deletar artigo");
	echo "Artigo deletado com sucesso!";
	header("location: http://drmariagoreti.com/pages/exibir.php");

?>