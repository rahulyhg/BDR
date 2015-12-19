<?php
/***************************************************************************************
-- EXERCÍCIO 1 --
Refatore o código abaixo, fazendo as alterações que julgar necessário.
<?php
class MyUserClass
{
	public function getUserList()
	{
		$dbconn = new DatabaseConnection('localhost','user','password');
		$results = $dbconn->query('select name from user');
		sort($results);
		return $results;
	 }
}
***************************************************************************************/
 
 
/*
* Classe Mysql - Uma conexão por vez (singleton)
*/
class MyUserClass {
	private $_conexao;
	private static $_instancia; //Única instancia
	private $_servidor = "SERVIDOR";
	private $_usuario = "USUARIO";
	private $_senha = "SENHA";
	private $_database = "DATABASE";
	/*
	Pega a instancia da database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instancia) { // Se não existe instancia, criar uma
			self::$_instancia = new self();
		}
		return self::$_instancia;
	}
	// Constructor
	private function __construct() {
		$this->_conexao = new mysqli($this->_servidor, $this->_usuario, 
			$this->_senha, $this->_database);
	
		// Erro
		if(mysqli_connect_error()) {
			trigger_error("Erro ao conectar MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	// Prevenir conexão duplicada
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_conexao;
	}
	
	public function getUserList()
	{	
		$db = Database::getInstance();
		$mysqli = $db->getConnection(); 
		$sql_query = "select name from user";
		return $mysqli->query($sql_query);
	 }
	
	
	
}
	
	
    
    
	
	
?>

