<?php
session_start(); 
include("conexao.php");
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];
$id = $_POST['id'];


$strcon = mysqli_connect('db773957428.hosting-data.io','dbo773957428','Aguia019$$$','db773957428') or die('Erro ao conectar com o banco de dados');
$sql=mysqli_query($strcon, "UPDATE posts SET titulo = '$titulo', descricao = '$descricao', conteudo = '$conteudo', data = '$data' WHERE id ='$id'");
mysqli_query($strcon,$sql);

if($sql == true){
	echo "alterado com sucesso";
	header("location: exibir.php");

}else{
	echo "Erro ao editar este post.";
}

?>