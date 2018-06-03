<?php
	class Gallery_Model extends CI_Model{

		/*---------SITE INTRO FOR LOCAL SITE VIEWS-----------------*/
		public function GetGalleryContentsData($data){
			$this->db->select('*');
			$this->db->from('tb_gallerycontent');
			//$this->db->where('introfor',$data['introfor']);
			$sresult = $this->db->get();
			$result  = $sresult->result(); 
			return $result; 
		}

		public function GetSingleImageByLastUpload($data){
			$this->db->select('*'); 
			$this->db->from('tb_galleryimages');
			$this->db->like('galleryimagefor',$data); 
			$this->db->order_by('id','DESC');
			$this->db->limit(1); 
			$sresult = $this->db->get(); 
			$result = $sresult->row(); 
			return $result; 
		}

		public function GetAllGalleryImages($data){
			$this->db->select('*');
			$this->db->from('tb_galleryimages');
			$this->db->order_by('rand()');

			$sresult = $this->db->get();
			$result = $sresult->result(); 
			return $result; 
		}
		
	}
?>