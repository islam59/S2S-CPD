<?php
	class Authority_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function GetAllAuthority($data){
			$this->db->select('*');
			$this->db->from('tb_authority');
			$this->db->where('status',0);
			$sresult = $this->db->get();
			$result  = $sresult->result(); 
			return $result; 
		}

		public function GetCmInfo($data){
			$this->db->select('*');
			$this->db->from('tb_authority');
			$this->db->where('user_type','Community Mobilizer'); 
			$result = $this->db->get(); 
			$result = $result->result(); 
			return $result; 
		}
		
	}
?>