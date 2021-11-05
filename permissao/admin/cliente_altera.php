<?php
//Controle de sessão
session_start();
//$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
$permissao = $_SESSION['permissao'];
if(!isset($nome)){
	header("location: logar.php");
	exit();
}
if($permissao == 1){
	header("location: ../publico/index.php");
}

require_once("conn.class.php");
require_once("cliente.class.php"); 

$cliente = new Cliente;

$id = $_POST['id'];
$nome = $_POST['nome'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$renda = $_POST['renda'];
$nascimento = $_POST['nascimento'];
$permissao = $_POST['permissao'];

if(empty($nome) || empty($username) || empty($senha) || empty($email) || empty($endereco) || empty($telefone) || empty($celular) || empty($renda) || empty($nascimento) || $permissao == 0){
	$texto = "Campo(s) obrigatório(s) não preenchido(s).";
}else{
	//Atualização dos dados na tabela de produtos do banco sgp
	$query = "UPDATE clientes SET nome = '".$nome."', username = '".$username."', senha = '".$senha."', email = '".$email."', endereco = '".$endereco."', telefone = ".$telefone.", celular = ".$celular.", renda = '".$renda."', nascimento = '".$nascimento."', permissao = ".$permissao." WHERE id_cliente = ".$id;
	//mysqli_query -> função nativa do php que executa a query colocada no seu parâmetro
	$sql = mysqli_query($con, $query);
	if($sql){
		$texto = "Cadastro alterado com sucesso.";
	}else{
		$texto = "Erro ao alterar: ".$query." -> ".mysqli_error();
	}
}
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='UTF-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>Cãofiança</title>
</head>
<body>
<div id="geral">
		<div id='menu'>
<ul>
	<li><a href='index.php'>Home</a></li>
	<li class='active'><a href='#'>Editar</a>
<ul>
	<li class='active'><a href='agenda_consulta.php'><span>Editar Agenda</span></a></li>
	<li class='active'><a href='adotar_cadastro.php'><span>Adotar Cadastro</span></a></li>
	<li class='active'><a href='adotar_consulta.php'><span>Consulta de Adotamento</span></a></li>
	<li class='active'><a href='cliente_consulta.php'><span>Cliente Edita</span></a></li>
</ul>
	<li><a href='galeria.php'>Galeria</a></li>
	<li><a href='deslogar.php'>Deslogar</a></li>
</ul>
</div>
	
	<p align="center"><?=$texto?></p>
			
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
</div>
</body>
<html>
