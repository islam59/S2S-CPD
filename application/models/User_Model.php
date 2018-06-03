<?php
	class User_Model extends CI_Model{

		/*USER LOGIN APPROVALS*/
		public function userLogin($data){
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('username',$data['username']);
			$this->db->where('password',md5($data['password']));
			//$this->db->where('access','1');
			$qresult = $this->db->get(); 

			$has  = $qresult->num_rows(); 

			if($has === 1){
				$result = $qresult->row(); 
				return $result; 
			}
		}

		public function profileData($data){
			$this->db->select('*'); 
			$this->db->from('tb_authority');
			$this->db->where('id',$data['id']);
			$result = $this->db->get();
			$result = $result->row(); 
			return $result; 
		}
		
		public function profileUpdate($data){
			$this->db->set('user_name',$data['user_name']);
			$this->db->set('email',$data['email']);
			$this->db->set('phone',$data['phone']);
			$this->db->set('details',$data['details']);
			$this->db->set('profile_one',$data['profile_one']);
			$this->db->set('profile_two',$data['profile_two']);
			$this->db->set('profile_three',$data['profile_three']);
			$this->db->where('id',$data['id']);
			$this->db->update('tb_authority');
		}

		public function profilePictureUpdate($data){
			$this->db->set('profile_picture',$data['profile_picture']); 
			$this->db->where('id',$data['id']);
			$this->db->update('tb_authority');
		}

		public function getAuthorById($data){
			$this->db->select('*');
			$this->db->from('tb_authority');
			$this->db->where('id',$data);
			$result = $this->db->get();
			$result = $result->row();
			return $result; 
		}

	}
?>