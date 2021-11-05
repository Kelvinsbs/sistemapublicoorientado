<?php
require_once("conexao.php");

session_start();

$username = addslashes($_POST['username']);
$senha = addslashes($_POST['senha']);

if(empty($username) || empty($senha)){
	echo "Preencha <b>Usu�rio</b> e <b>Senha</b>.";
}else{
	//Verifica username
	$query = "SELECT * FROM clientes WHERE username LIKE '".trim($username)."' AND senha LIKE '".trim($senha)."'";
	$sql = mysqli_query($con, $query);
	//mysqli_num_rows -> fun��o nativa do php que conta quantas linhas retornou o select
	$num = mysqli_num_rows($sql);
	if($num == 0){
		echo 'username incorreto';
	}else{
		$result = mysqli_fetch_array($sql);
		$nome = $result['nome'];
		$permissao = $result['permissao'];
		$_SESSION['nome'] = $nome;
		$_SESSION['permissao'] = $permissao;
		
		header("location: index.php");
	}
}
?>