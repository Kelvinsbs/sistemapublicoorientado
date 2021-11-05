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
	header("location: ../admin/index.php");
}
require_once("conn.class.php");
require_once("agenda.class.php"); 

$agenda = new Agenda;

$id = $_POST['id'];
$date = $_POST['date'];
$hora = $_POST['hora'];

if($date == 0 || $hora == 0){
	$texto = "Campo(s) obrigatório(s) não preenchido(s).";
}else{
	//Atualização dos dados na tabela de produtos do banco sgp
	$query = "UPDATE agenda SET date = '".$date."', hora = '".$hora."' WHERE id_cliente = ".$id;
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
