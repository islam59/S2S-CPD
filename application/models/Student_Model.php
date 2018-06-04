<?php
	class Student_Model extends CI_Model{

		/*registred student saved to database...*/
		public function SaveStudentData($data){
			$this->db->insert('tb_student_profile',$data);
		}

		/*all applicant request pre-included into club.*/
		public function AllApplicantsRequest($data){
			$this->db->select('*');
			$this->db->from('tb_student_profile');
			$this->db->where('status',0);
			$result = $this->db->get();
			$result = $result->result();
			return $result; 
		}

		/*count all applicant*/
		public function GetTotalApplicant($data){
			$this->db->select('*');
			$this->db->from('tb_student_profile');
			$this->db->where('status',0);
			$result = $this->db->get(); 
			$result  = $result->num_rows(); 
			return $result; 
		}

		/*approve the request to club : activate applicant to club*/
		public function AcceptApplicantRequest($id){
			$this->db->set('status',1);
			$this->db->where('id',$id);

			$this->db->update('tb_student_profile');
		}


		/*count club applicant*/
		public function GetTotalClubApplicant($data){
			$this->db->select('*');
			$this->db->from('tb_student_profile');
			$this->db->where('status',1);
			/*
			$this->db->or_where('admission_status',2);
			$this->db->or_where('admission_status',3);
			$this->db->or_where('admission_status',4);
			$this->db->or_where('admission_status',5);
			*/
			$result = $this->db->get(); 
			$result = $result->num_rows(); 
			return $result; 
		}

		/*all youth club students data fetching..*/		
		public function AllYouthClubStudents($data){
			$this->db->select('*'); 
			$this->db->from('tb_student_profile');
			$this->db->where('status',1);
			$result = $this->db->get();
			$result = $result->result(); 
			return $result;  
		}

		/*count club applicant*/
		public function GetTotalLabApplicant($data){
			$this->db->select('*');
			$this->db->from('tb_student_profile');
			$this->db->where('status',2);
		/*
			$this->db->where('admission_status','CLUB 1');
			$this->db->or_where('admission_status','CLUB 2');
			$this->db->or_where('admission_status','CLUB 3');
			$this->db->or_where('admission_status','CLUB 4');
			$this->db->or_where('admission_status','CLUB 5');
		*/
			$result = $this->db->get(); 
			$result = $result->num_rows(); 
			return $result; 
		}

		public function AddToLab($data){
			$this->db->set('admission_status',$data['trade']);
			$this->db->set('status',2);
			$this->db->where('id',$data['id']); 

			$this->db->update('tb_student_profile');
		}

		/*all Lab students data fetching..*/		
		public function AllLabStudents($data){
			$this->db->select('*'); 
			$this->db->from('tb_student_profile');
			$this->db->where('status',2);
			$result = $this->db->get();
			$result = $result->result(); 
			return $result;  
		}

	}
?>