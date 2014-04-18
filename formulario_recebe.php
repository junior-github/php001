<?php 
if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$sexo = $_POST['sexo'];
	
	echo "Nome: $nome <br/>";
	echo "Idade: $idade <br/>";
	echo "Sexo: $sexo <br/>";
}
?>