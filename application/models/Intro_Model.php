<?php
	class Intro_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function GetSiteIntroByKey($data){
			$this->db->select('*');
			$this->db->from('tb_intro');
			$this->db->where('introfor',$data['introfor']);
			$sresult = $this->db->get();
			$result  = $sresult->row(); 
			return $result; 
		}

		
	}
?>