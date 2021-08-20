<?php
class Conecta {
	static private $db;
	var $host;
	var $usuario;
	var $senha;
	var $banco;
	
	function __construct() {
		$this->host = "";
		$this->usuario = "";
		$this->senha = "";
		$this->banco = "";
	}

	
	public static function criarConexao(){
		try
		{
			//self::$db = new PDO('pgsql:host=ibrafisiodb.postgresql.dbaas.com.br;dbname=ibrafisiodb;user=ibrafisiodb;password=Senha@123');
			self::$db = new PDO('mysql:host=64.225.61.37;dbname=unimidias;charset=utf8', 'userweb', 'Pif98171$');
			
	        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
			return self::$db;
		}
		catch ( PDOException $e )
		{
		    die( 'Erro ao conectar com o Banco: ' . $e->getMessage());
		}
	}


	
	static public function getConexao()
	{
		global $con;
		if(self::$db)
		{
			$con=self::$db;
			return $con;
		}
		else
		{
			$con=self::criarConexao();
			return $con;	
		}
	}

}


?>