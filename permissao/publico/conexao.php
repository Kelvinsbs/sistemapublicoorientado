<?php
//Conexão com o banco de dados
//mysql_connect -> função nativa do PHP que faz a conexão com o servidor do banco de dados
$con = mysqli_connect("localhost", "root", "") or die("Erro ao conectar o servidor");
//mysql_select_db -> função nativa do php que seleciona o banco a ser utilizado pelo php
$bd = mysqli_select_db($con, "veterinaria") or die("Erro ao selecionar o banco");
//////////////////////////////////////////////////////////////////
?>