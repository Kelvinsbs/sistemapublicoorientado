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
	private $permissao;
	
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
	function setPermissao($permissao){
		$this->permissao = $permissao;
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
	function getPermissao(){
		return $this->permissao;
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
	}*/
	public function consulta(){
		$query = "SELECT id_cliente, nome, username, senha, email, endereco, telefone, celular, renda, nascimento, permissao FROM clientes ORDER BY nome";
		$sql = $this->conn->query($query);
		$tabela = '';
		while($result = $this->conn->fetch($sql)){
			$this->setId($result->id_cliente);
			$this->setNome($result->nome);
			$this->setUsername($result->username);
			$this->setSenha($result->senha);
			$this->setEmail($result->email);
			$this->setEndereco($result->endereco);
			$this->setTelefone($result->telefone);
			$this->setCelular($result->celular);
			$this->setRenda($result->renda);
			$this->setNascimento($result->nascimento);
			$this->setPermissao($result->permissao);

			$tabela .= '<tr align="center">
							<td>'.$this->nome.'</td>
							<td>'.$this->username.'</td>
							<td>'.$this->senha.'</td>
							<td>'.$this->email.'</td>
							<td>'.$this->endereco.'</td>
							<td>'.$this->telefone.'</td>
							<td>'.$this->celular.'</td>
							<td>'.$this->renda.'</td>
							<td>'.$this->nascimento.'</td>
							<td>'.$this->permissao.'</td>
							<td><a href="cliente_edita.php?id='.$this->id.'">Editar</a></td>
							<td><a href="cliente_exclui.php?id='.$this->id.'">Excluir</a></td>
						</tr>';
			}
		return $tabela;
	}
	public function edita(){
		$query = "SELECT * FROM clientes WHERE id_cliente = ".$this->id;
		$sql = $this->conn->query($query);
		$result = $this->conn->fetch($sql);

		$this->setId($result->id_cliente);
		$this->setNome($result->nome);
		$this->setUsername($result->username);
		$this->setSenha($result->senha);
		$this->setEmail($result->email);
		$this->setEndereco($result->endereco);
		$this->setTelefone($result->telefone);
		$this->setCelular($result->celular);
		$this->setRenda($result->renda);
		$this->setNascimento($result->nascimento);
		$this->setPermissao($result->permissao);
	}
	
	function comboPermissao($p){
		$vetor_p = array("1" => "Comum", "2" => "Administrador");
		$combo = '<option value="0">Selecione</option>';
		foreach($vetor_p as $indice => $valor){
			if($indice == $p){
				$combo .= '<option value="'.$indice.'" selected>'.$valor.'</option>';
			}else{
				$combo .= '<option value="'.$indice.'">'.$valor.'</option>';
			}
		}
		return $combo;
	}

	public function altera($query){
		$sql = $this->conn->query($query);
		return $sql;
	}
	public function exclui(){
		$query = "DELETE FROM clientes WHERE id_cliente = ".$this->id;
		$sql = $this->conn->query($query);
		
		return $sql;
	}
}
?>