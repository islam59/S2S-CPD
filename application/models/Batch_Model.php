<?php
	class Batch_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function GetAllBatch($data){
			$this->db->select('*');
			$this->db->from('tb_batch');
			$this->db->where('status',0);
			$sresult = $this->db->get();
			$result  = $sresult->result(); 
			return $result; 
		}

		
	}
?>