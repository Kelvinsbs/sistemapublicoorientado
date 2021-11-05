<?php
require_once("conn.class.php");
class Adotar{
	private $conn;
	private $id;
	private $raca;
	private $idade;
	private $descricao;

public function __construct(){
		$this->conn = new Conn;
	}
	//Métodos Set
	function setId($id){
		$this->id = $id;
	}
	function setRaca($raca){
		$this->raca = $raca;
	}
	function setIdade($idade){
		$this->idade = $idade;
	}
	function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	//Métodos Get
	
	function getId(){
		return $this->id;
	}
	function getRaca(){
		return $this->raca;
	}
	function getIdade(){
		return $this->idade;
	}
	function getDescricao(){
		return $this->descricao;
	}
	/*
		bagulho de logar 
	*/
	public function cadastra(){
		$query = "INSERT INTO adotar VALUES(0, '".$this->raca."', '".$this->idade."', '".$this->descricao."')";
		$sql = $this->conn->query($query);
			
		return $sql;
	}
	/*function trataPermissao($n){
		if($n == 1){
			$p = 'Comum';
		}else{
			$p = 'Administrador';
		}
		return $p;
	}*/
	
	public function consulta(){
		$query = "SELECT id_animal, raca, idade, descricao FROM adotar ORDER BY id_animal";
		$sql = $this->conn->query($query);
		$tabela = '';

		while($result = mysql_fetch_array($sql)){
			$id = $result['id_animal'];
			$foto = $id.".jpg";
			$raca = $result['raca'];
			$idade = $result['idade'];
			$descricao = $result['descricao'];


			$tabela .= '<div id="field1">
							<img class="imagemfield1" src="../admin/fotos/'.$foto.'" />
							<span class="metade_field">
								<b>Raça: </b>'.$raca.'<br />
								<b>Idade: </b>'.$idade.'<br />
								<b>Descrição:</b><br />
								'.$descricao.'
							</span>
						</div>';
		} 
		return $tabela;
	}
	public function edita(){
		$query = "SELECT * FROM adotar WHERE id_animal = ".$this->id;
		$sql = $this->conn->query($query);
		$result = $this->conn->fetch($sql);


		$this->setRaca($result->raca);
		$this->setIdade($result->idade);
		$this->setDescricao($result->descricao);
	}
	public function altera($query){
		$sql = $this->conn->query($query);
		return $sql;
	}
	public function exclui(){
		$query = "DELETE FROM adotar WHERE id_animal = ".$this->id;
		$sql = $this->conn->query($query);
		
		return $sql;
	}
}
?>