<?php
	require_once('model.php');
	/**
	* 
	*/
	class Usuario extends DBAbstractModel
	{
		public $usua;
		public $contra;
		
		function __construct()
		{
			$this->db_name = 'pelu';
		}

		public function get ($usua='',$contra='')
		{
			if($usua!=''&$contra!=''){
				$this->query ="
					SELECT usuario, contrasenia
					FROM usuarios
					WHERE usuario ='".$usua."' and contrasenia='".$contra."'";
					$this->get_results_from_query();
			}
			if(count ($this->rows) == 1){
				foreach ($this->rows[0] as $propiedad => $valor){
					$this->$propiedad = $valor;
				}
			}
		}
		function __destruct(){
			unset($this);
		}
	}
?>