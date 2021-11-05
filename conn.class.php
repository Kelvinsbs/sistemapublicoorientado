<?php
class Conn{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $banco = "veterinaria";
	
	//Método construtor executado no momento em que é instanciada a classe criando o objeto
	function __construct(){
		$con = mysql_connect($this->host, $this->user, $this->pass) or die("Erro ao conectar o servidor do banco de dados. Favor contactar o administrador.");
		$db = mysql_select_db($this->banco) or die("Erro ao selecionar o banco de dados. Favor contactar o administrador.");
	}
	public function query($query){
		$sql = mysqli_query($query) or die("<b>Erro ao executar a query:</b> ".$query." -> ".mysqli_error());
		return $sql;
	}
	public function fetch($sql){
		$result = mysqli_fetch_object($sql);
		return $result;
	}
	public function num($sql){
		$num = mysqli_num_rows($sql);
		return $num;
	}
	//Método que destrói a classe
	function __destruct(){}
}
?>