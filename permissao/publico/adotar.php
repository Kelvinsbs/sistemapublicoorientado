<?php
//Controle de sessão
session_start();
//$id_cliente = $_SESSION['id_cliente'];
$nome = $_SESSION['nome'];
if(!isset($nome)){
	header("location: logar.php");
	exit();
}

require_once("conn.class.php");
require_once("adotar.class.php");

$query = "SELECT id_animal, raca, idade, descricao FROM adotar ORDER BY id_animal";
$sql = mysqli_query($con, $query);
$tabela = '';

$adotar = new Adotar;
$tabela = $adotar->consulta();
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
		<li class='active'><a href='#'>Serviços</a>
	<ul>
		<li class='active'><a href='agenda_cadastro.php'><span>Agenda</span></a></li>
		<li class='active'><a href='agenda_consulta.php'><span>Consultar a Agenda</span></a></li>
		<li class='active'><a href='adotar.php'><span>adotar</span></a></li>
	</ul>
		<li><a href='galeria.php'>Galeria</a></li>
		<li><a href='deslogar.php'>Deslogar</a></li>
	</ul>
	</div>

	<p align="center">Obs: Caso se interesse por algum animal, entre em contato conosco pelos telefones (048)3223-5555 / (048)9854-7154.</p>
	<div id="lista_adota"><?=$tabela?></div>
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)9854-7154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
	</div>
</body>
<html>
