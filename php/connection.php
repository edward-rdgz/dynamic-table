<?php
class connection { // APERTURA DE LA CLASE
	
	private $server; // SERVIDOR
	private $user; // USUARIO
	private $password; // CONTRASEÑA
	private $database; // BASE DE DATOS
	protected $connection; // VARIABLE DE CONEXION
	
	public function __construct() { // CONSTRUCTOR DE LA CLASE 
		$this->server = "localhost"; // INICIALIZACION DE LA VARIABLE SERVIDOR
		$this->user = "root"; // INICIALIZACION DE LA VARIABLE USUARIO
		$this->password = ""; // INICIALIZACION DE LA VARIABLE CONTRASEÑA
		$this->database = "dcpool"; // INICIALIZACION DE LA VARIABLE BASE DE DATOS
	}
	
	public function connect() { // CONEXION MYSQLI
		$this->connection = new mysqli($this->server, $this->user, $this->password, $this->database) or die($this->connection->conect_error);
	}
	
	public function disconnect() { // DESCONEXION MYSQLI
		$this->connection->close() or die($this->connection->conect_error);
	}
	
} // CIERRE DE LA CLASE 
?>