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
<div id='menu'>
<ul>
   <li><a href='index.php'>Home</a></li>
   <li class='active'><a href='logar.php'>Serviços</a>
   </li>
   <li><a href='galeria.php'>Galeria</a></li>
   <li><a href='logar.php'>Logar</a></li>
</ul>
</div>
<div id="geral">
		<div id="login" align="center">
			<form action="autentica.php" method="get">
			<br />
			<label for="tagUsuario">Nome:</label> 
            <input type="text" name="login" id="tagUsuario">
			<br>
			
			<label for="tagEmails">Senha:</label>
			<input type="password" name="senha" id="tagEmais">
			<br>
			<a href="cadastrar.php">Cadastrar-se</a>
			<input type="submit" value="Entrar" />
        </form>			
		</div>
		<div id="rodape">
			<p>Fale Conosco</p>
			<p>Contatos: (048)3223-5555/(048)98547154</p>
			<p>Rod. Siberio nunes, 9857</p>
			<p>Email: Caofianca@hotmail.com</p>
		</div>
	</div>	
</body>

<html>
