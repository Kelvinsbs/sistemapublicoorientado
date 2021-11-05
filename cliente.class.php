<?php
require_once("conn.class.php");
class Cliente{
	private $conn;
	private $id;
	private $nome;
	private $username;
	private $senha;
	private $email;
	private $endereco;
	private $telefone;
	private $celular;
	private $renda;
	private $nascimento;
	


public function __construct(){
		$this->conn = new Conn;
	}
	//Métodos Set
	function setId($id){
		$this->id = $id;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	function setUsername($username){
		$this->username = $username;
	}
	function setSenha($senha){
		$this->senha = $senha;
	}
	function setEmail($email){
		$this->email = $email;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	function setCelular($celular){
		$this->celular = $celular;
	}
	function setRenda($renda){
		$this->renda = $renda;
	}
	function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}
	//Métodos Get
	
	function getId(){
		return $this->id;
	}
	function getNome(){
		return $this->nome;
	}
	function getUsername(){
		return $this->username;
	}
	function getSenha(){
		return $this->senha;
	}
	function getEmail(){
		return $this->email;
	}
	function getEndereco(){
		return $this->endereco;
	}
	function getTelefone(){
		return $this->telefone;
	}
	function getCelular(){
		return $this->celular;
	}
	function getRenda(){
		return $this->renda;
	}
	function getNascimento(){
		return $this->nascimento;
	}
	/*
		bagulho de logar 
	*/
	public function cadastra(){
		$query = "INSERT INTO clientes VALUES(0, '".$this->nome."', '".$this->username."', '".$this->senha."', '".$this->email."', '".$this->endereco."', '".$this->telefone."', '".$this->celular."', '".$this->renda."', '".$this->nascimento."', 1)";
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
	}
	public function consulta(){
		$query = "SELECT id_animal, nome, username, senha FROM adotar ORDER BY id_animal";
		$sql = $this->conn->query($query);
		$tabela = '';
		while($result = $this->conn->fetch($sql)){
			$this->setId($result->id_animal);
			$this->setnome($result->nome);
			$this->setusername($result->username);
			$this->setsenha($result->senha);
			$foto = $this->id.".jpg";

			$tabela .= '<tr align="center">
							<td><img src="fotos/'.$foto.'" width="100"/></td>
							<td>'.$this->nome.'</td>
							<td>'.$this->username.'</td>
							<td>'.$this->senha.'</td>
							<td><a href="adotar_edita.php?id='.$this->id.'">Editar</a></td>
							<td><a href="adotar_exclui.php?id='.$this->id.'">Excluir</a></td>
						</tr>';
			}
		return $tabela;
	}
	public function edita(){
		$query = "SELECT * FROM adotar WHERE id_animal = ".$this->id;
		$sql = $this->conn->query($query);
		$result = $this->conn->fetch($sql);


		$this->setnome($result->nome);
		$this->setusername($result->username);
		$this->setsenha($result->senha);
	}
	public function altera($query){
		$sql = $this->conn->query($query);
		return $sql;
	}
	public function exclui(){
		$query = "DELETE FROM adotar WHERE id_animal = ".$this->id;
		$sql = $this->conn->query($query);
		
		return $sql;
	}*/
}
?>