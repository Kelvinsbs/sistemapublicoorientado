<?php
//Controle de sessão
session_start();
//$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
if(!isset($nome)){
	header("location: logar.php");
	exit();
}

require_once("conn.class.php");
require_once("funcoes.php");
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
<div id="geral">
<center><div id="tabela">
	<table border="1">
	<tr>
		<td>Segunda</td>
		<td>Terça</td>
		<td>Quarta</td>
		<td>Quinta</td>
		<td>Sexta</td>
	</tr>
	<tr>
		<td>09:00</td>
		<td>&nbsp; &nbsp; </td>
		<td>Alfredo</td>
		<td>&nbsp; &nbsp;</td>
		<td>&nbsp; &nbsp;</td>					
	</tr>
	<tr>
		<td>10:00</td>
		<td>Gustavo</td>
		<td>&nbsp; &nbsp;</td>
		<td>&nbsp; &nbsp;</td>
		<td>Aline</td>					
	</tr>
	<tr>
		<td>11:00</td>
		<td>&nbsp; &nbsp; </td>
		<td>&nbsp; &nbsp;</td>
		<td>Vinicius</td>
		<td>Luiz</td>					
	</tr>
	<tr>
		<td>13:00</td>
		<td>Vitor</td>
		<td>Igor</td>
		<td>&nbsp; &nbsp;</td>
		<td>Andrey</td>					
	</tr>
	<tr>
		<td>14:00</td>
		<td>&nbsp; &nbsp; </td>
		<td>&nbsp; &nbsp;</td>
		<td>Pamela</td>
		<td>&nbsp; &nbsp;</td>					
	</tr>
	<tr>
		<td>15:00</td>
		<td>&nbsp; &nbsp; </td>
		<td>Jennifer</td>
		<td>&nbsp; &nbsp;</td>
		<td>&nbsp; &nbsp;</td>					
	</tr>
	<tr>
	<td>16:00</td>
	<td>Sergio</td>
	<td>&nbsp; &nbsp;</td>
	<td>Leonardo</td>
	<td>&nbsp; &nbsp;</td>					
	</tr>
	</table>
</div></center>
</div>
<div id="rodape">
	<p>quem somos?</p>
	<p>Contatos: (048)3223-5555, (048)98547154</p>
	<p>Rod. Siberio nunes, 9857</p>
</div>
</body>
<html>
