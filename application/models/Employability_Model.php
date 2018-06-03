<?php
	class Employability_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function GetEmpContentById($data){
			$this->db->select('*');
			$this->db->from('tb_about_training');
			$this->db->where('id',1);
			//$this->db->where('id',1); 
			$sresult = $this->db->get();
			$result  = $sresult->row(); 
			return $result; 
		}
		
	}
?>