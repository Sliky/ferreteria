<?php
	abstract class DBAbstractModel{

		private static $db_host = "localhost";
		private static $db_user = "root";
		private static $db_pass = "";
		protected $db_name ="pelu";
		protected $query;
		protected $rows = array ();
		private $conn;

		#metodos para realizar selecciones
		#ediciones y eliminaciones
		abstract protected function get();
		//abstract protected function set();
		//abstract protected function edit();
		//abstract protected function delete();

		#contectar a la base de datos
		private function open_connection(){
			$this->conn = new mysqli(
				self::$db_host,
				self::$db_user,
				self::$db_pass,
				$this->db_name);
		}
		#desconectar la base de datos
		private function close_connection(){
			$this->conn->close();
		}

		#ejecutar un query simple del tipo
		#insercion
		#edicion
		#eliminacion
		protected function execute_single_query(){
			$this->open_connection();
			$this->conn->query($this->query);
			$this->close_connection();
		}

		#Traer resultados de una consulta en un Array
		protected function get_results_from_query(){
			$this->open_connection();
			$result = $this->conn->query($this->query);
			while ($this->rows[] = $result->fetch_assoc());
			$result->close();
			$this->close_connection();
			array_pop($this->rows);
		}
	}
?>