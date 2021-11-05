<?php
require_once("conn.class.php");
require_once("funcoes.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
   <meta charset='UTF-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>Cãofiança</title>
   <!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
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
	</div>
	<h3 align="center">Cadastramento de Consultas, para seu Animal</h3> 
	<div id="cadastro">
	<form method="POST" action="agenda_grava.php">
	<table align="center">
		<tr>
			<td colspan="2" align="right">* Campo(s) obrigatório(s)</td>
		</tr>
		<tr>
		<td align="right">*Dia:</td>
		<td>
			<div><input type="text" name="date" class="tcal" /></div>
		</td>
		</tr>
		<tr>
		<td align="right">*Hora:</td>
		<td>
			<select name="hora">
				<option value="0">Selecione</option>
				<option value="1">09:00</option>
				<option value="2">10:00</option>
				<option value="3">11:00</option>
				<option value="4">12:00</option>
				<option value="5">13:00</option>
				<option value="6">14:00</option>
				<option value="7">15:00</option>
				<option value="8">16:00</option>
			</select>
		</td>
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
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
</div>
</body>
<html>
