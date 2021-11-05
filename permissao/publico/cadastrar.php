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
	<h3 align="center">Cadastre-se</h3> 
	<div id="cadastro">
	<form method="POST" action="cliente_grava.php">
	<table align="center">
		<tr>
			<td colspan="2" align="right">* Campo(s) obrigatório(s)</td>
		</tr>
		<tr>			
			<td>*Nome:</td>
			<td><input type="text" name="nome" /></td>
		</tr>
		<tr>
			<td>*Login:</td>
			<td><input type="text" name="login" /></td>
		</tr>	
		<tr>	
			<td align="rigth">*Senha:</td>
			<td><input type="password" name="senha" /></td>
		</tr>
		<tr>
			<td>*Email:</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>			
			<td>*Endereço:</td>
			<td><input type="text" name="endereco" /></td>
		</tr>
		<tr>
			<td>*Telefone:</td>
			<td><input type="text" name="telefone" /></td>
			<td align="left">*Celular:</td>
			<td><input type="text" name="celular" /></td>
		</tr>
		<tr>			
			<td>*Renda:</td>
			<td><input type="text" name="renda" /></td>
		</tr>
		<tr>			
			<td>*Nascimento:</td>
			<td><input type="text" name="nascimento" /></td>
		</tr>	
		<tr align="right">
			<td colspan="2">
				<input type="reset" value="Limpar" />
				<input type="submit" value="Cadastrar" />
			</td>
		</tr>
	</table>
</div>
<div id="rodape">
	<p>quem somos?</p>
	<p>Contatos: (048)3223-5555, (048)98547154</p>
	<p>Rod. Siberio nunes, 9857</p>
</div>
</div>
</body>
<html>
