<?php
	class Message_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function SaveSendMessage($data){
			$this->db->insert('tb_local_message',$data); 
		}

		
	}
?>