<?php
include('connection.php');

class users extends connection {
	
	public function list_users() { // MUESTRA EL REGISTRO DE LOS USUARIOS
		$this->connect();
		$sql = "SELECT id_usuario AS 'N°', usuario AS 'Usuario', CONCAT(nombre,' ', apellido_paterno,' ',apellido_materno) AS 'Nombre Completo', 
		celular AS 'Celular', direccion AS 'Dirección', correo AS 'Correo Electrónico', curp AS 'CURP' FROM usuarios ";
		$query = $this->connection->query($sql) or die($this->connection->conect_error);
		$this->disconnect();
		return $query;
	}
		
}
?>