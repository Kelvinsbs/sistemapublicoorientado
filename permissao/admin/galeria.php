<?php
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
   <!--<script src="script.js"></script>-->
   <script type="text/javascript" src="functions.js"></script>
   
   <!--GALERIA-->
	<link type="text/css" href="styles/bottom.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="lib/jquery.touchwipe.min.js"></script>
		<script language="javascript">
			$(document).ready(
				function (){
					$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
				});
		</script>

   <title>Cãofiança</title>
</head>
<body>
<div id="container">
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
<div id="geral">
	<div class="pikachoose">
			<ul id="pikame" class="jcarousel-skin-pika">
			<li><img src="fotos/c6.jpg"/></li>
			<li><img src="fotos/luiz4.jpg"/></li>
			<li><img src="fotos/luiz6.jpg"/></li>
			<li><img src="fotos/luiz7.jpg"/></li>
			<li><img src="fotos/c1.jpg"/></li>
			<li><img src="fotos/c2.jpg"/></li>
			<li><img src="fotos/c3.jpg"/></li>
			<li><img src="fotos/c4.jpg"/></li>
			<li><img src="fotos/c5.jpg"/></li>
			<li><img src="fotos/c7.jpg"/></li>
			<li><img src="fotos/c8.jpg"/></li>
			<li><img src="fotos/c9.jpg"/></li>
			<li><img src="fotos/c10.jpg"/></li>
			<li><img src="fotos/c11.jpg"/></li>
			<li><img src="fotos/c12.jpg"/></li>
			<li><img src="fotos/c13.jpg"/></li>
			<li><img src="fotos/c14.jpg"/></li>
			<li><img src="fotos/c15.jpeg"/></li>
			<li><img src="fotos/c16.jpg"/></li>
			<li><img src="fotos/c17.jpg"/></li>
			<li><img src="fotos/c18.jpg"/></li>
			<li><img src="fotos/c19.jpg"/></li>
			<li><img src="fotos/c20.jpg"/></li>
			<li><img src="fotos/c21.jpg"/></li>
			<li><img src="fotos/c22.jpg"/></li>
			<li><img src="fotos/c23.jpg"/></li>
			</ul>
		</div>

		<div id="rodape">
			<p>Fale Conosco</p>
			<p>Contatos: (048)3223-5555/(048)98547154</p>
			<p>Rod. Siberio nunes, 9857</p>
			<p>Email: Caofianca@hotmail.com</p>
		</div>
	</div>		
</div>
</body>
<html>
