<?php
	class Siteinfo_Model extends CI_Model{

		/*---------SITE INFO FOR LOCAL SITE VIEWS-----------------*/
		public function GetSiteinfoByID($data){
			$this->db->select('*');
			$this->db->from('tb_siteinfo');
			$this->db->where('id',1);
			$sresult = $this->db->get();
			$result  = $sresult->row(); 
			return $result; 
		}

		
	}
?>