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

		<div id="adotar">
		<table border="0">
		<tr>
			<td><img src="fotos/cachorrinhos.jpg" width="200px" height="150px" ></td>
			<td><img src="fotos/filhotes_labradores.jpg" width="200px" ></td>
			<td><img src="fotos/beagle.jpg" width="200" ></td>
			<td><img src="fotos/deprimido.jpg" width="200" height="150px" ></td>
		</tr>
		<tr align="center">
			<td><input type="submit" value="Editar"/></td>
			<td><input type="submit" value="Editar" /></td>
			<td><input type="submit" value="Editar" /></td>
			<td><input type="submit" value="Editar" /></td>
		</tr>
		</table>
	</div>	
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
	</div>
</body>
<html>
