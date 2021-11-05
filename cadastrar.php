<?php
require_once("conexao.php");
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
<div id="geral">
	<div id='menu'>
	<ul>
	   <li><a href='index.php'>Home</a></li>
	   <li class='active'><a href='logar.php'>Serviços</a></li>
	   <li><a href='galeria.php'>Galeria</a></li>
	   <li><a href='logar.php'>Logar</a></li>
	</ul>
	</div>
	<h3 align="center">Cadastre-se</h3> 
	<div id="cadastro">
	<form method="POST" action="cliente_grava.php">
	<table align="center">
		<tr>
			<td colspan="2" align="right">* Campo(s) obrigatório(s)</td>
		</tr>
		<tr align="right">			
			<td>*Nome:</td>
			<td><input type="text" name="nome" /></td>
		</tr>
		<tr align="right">
			<td>*Nome de Usuario:</td>
			<td><input type="text" name="username" /></td>
		</tr>	
		<tr align="right">	
			<td align="rigth">*Senha:</td>
			<td><input type="password" name="senha" /></td>
		</tr>
		<tr align="right">
			<td>*Email:</td>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr align="right">			
			<td>*Endereço:</td>
			<td><input type="text" name="endereco" /></td>
		</tr>
		<tr align="right">
			<td>*Telefone:</td>
			<td><input type="text" name="telefone" /></td>
		</tr>
		<tr>
			<td align="right">*Celular:</td>
			<td><input type="text" name="celular" /></td>
		</tr>
		<tr align="right">			
			<td>*Renda:</td>
			<td><input type="text" name="renda" /></td>
		</tr>
		<tr align="right">			
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
</html>
