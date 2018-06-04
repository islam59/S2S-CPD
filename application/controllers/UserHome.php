<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserHome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct(); 
		
		/*..cache removal code........
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
		$this->output0->set_header('Pragma: no-cache');
		.*/

		$this->load->model('siteinfo_model');
		$this->load->model('intro_model');
		$this->load->model('gallery_model');
		$this->load->model('authority_model');
		$this->load->model('batch_model'); 
		$this->load->model('employability_model');
		$this->load->model('message_model');
		$this->load->model('user_model');
		$this->load->model('student_model'); 

		$this->load->helper('form','url');
		$data = array(); 

		if(!$this->session->userdata('userlogin')){
			redirect('User/Logout');
		} 
	}

	public function index()
	{		
		$this->Dashboard(); 
	}


	public function Dashboard(){ /* HOME PAGE FUNCITON */
		$data = array(); 

		$data['id'] = $this->session->userdata['profile_id']; 
		$data['profile_info'] = $this->user_model->profileData($data);
		$data['allApplicant'] = $this->student_model->GetTotalApplicant($data);
		$data['allYouths'] = $this->student_model->GetTotalClubApplicant($data); 
		$data['allTrainee'] = $this->student_model->GetTotalLabApplicant($data);
		//$data['allStudent'] = $this->student_model->GetTotalClubStudent($data); /*fetch all student of club*/
		/*-----------------------------------------------------------------------------------*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/ 
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_sidebar'] = $this->load->view('admin-pages/admin-sidebar.php',$data);
		$data['page_content'] = $this->load->view('admin-pages/Dashboard.php',$data); /*content Loaded*/
		$data['page-footer'] = $this->load->view('included/page_footer.php',$data); 
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function Profile(){ /* HOME PAGE FUNCITON */
		$data = array(); 

		$data['id'] = $this->session->userdata['profile_id']; 
		$data['profile_info'] = $this->user_model->profileData($data);
		$data['allApplicant'] = $this->student_model->GetTotalApplicant($data);
		$data['allYouths'] = $this->student_model->GetTotalClubApplicant($data); 
		$data['allTrainee'] = $this->student_model->GetTotalLabApplicant($data);
		/*-----------------------------------------------------------------------------------*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_sidebar'] = $this->load->view('admin-pages/admin-sidebar.php',$data);
		$data['page_content'] = $this->load->view('admin-pages/Profile.php',$data); /*content Loaded*/
		$data['page-footer'] = $this->load->view('included/page_footer.php',$data); 
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function ProfileUpdate(){ /* HOME PAGE FUNCITON */
		$data = array(); 

		$data['id'] = $this->input->post('id'); 
		$data['user_name'] = $this->input->post('user_name'); 
		$data['email'] = $this->input->post('email'); 
		$data['phone'] = $this->input->post('phone'); 
		$data['details'] = $this->input->post('details'); 
		$data['profile_one'] = $this->input->post('profile_one'); 
		$data['profile_two'] = $this->input->post('profile_two'); 
		$data['profile_three'] = $this->input->post('profile_three'); 

		if(empty($data['user_name']) OR empty($data['id'])){
			$cdata = array(); 
			$cdata['admin_msg'] = "<span style='color:yellow;'> Updated Failed !</span>"; 
			$this->session->set_flashdata($sdata);
			redirect('UserHome/Profile',$sdata);
		}else{
			$this->user_model->profileUpdate($data);

			$cdata = array(); 
			$cdata['admin_msg'] = "<span style='color:green;'> Updated Successfully !</span>"; 
			$this->session->set_flashdata($cdata);
			
			redirect('UserHome/Profile/',$sdata);
		}
	}

	public function ProfilePicture(){
		$data = array(); 
		$data['id'] = $this->input->post('id');
		$data['old_image'] = $this->input->post('old_image'); 
		$data['profile_picture']= $_FILES['profile_picture']['name'];

		$old_image = $data['old_image']; 
		$profile_picture = $data['profile_picture']; 

		if(empty($data['profile_picture'])){
			$sdata =  array();
			$sdata['admin_msg'] = '<span style="color:red;"> Failed To Updated !</span>';
			$this->session->set_flashdata($sdata);
			redirect("UserHome/Profile",$sdata);
		}else{	
				$this->user_model->profilePictureUpdate($data);

				/*image uploads...*/
                $config['upload_path']          = 'images/trainers/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100000000000;
                $config['max_width']            = 102400000;
                $config['max_height']           = 7680000;

                $this->load->library('upload', $config);//uploads...
                if ( ! $this->upload->do_upload('profile_picture')){
                	$error = array('error' => $this->upload->display_errors());
                }else{
                	$file = "images/trainers/".$old_image;
		   			if (file_exists($file)){ unlink($file); }//unlinks....

		   			$data = array('upload_data' => $this->upload->data());
		   		}/*End# image uploads...*/

			$sdata = array();
			$sdata['admin_msg'] = '<span style="color:green;"> Profile Picture Successfully!</span>'; 
			$this->session->set_flashdata($sdata);
			redirect("UserHome/Profile",$sdata);
	}
}

	public function Request(){ /* HOME PAGE FUNCITON */
		$data = array(); 

		$data['id'] = $this->session->userdata['profile_id']; 
		$data['profile_info'] = $this->user_model->profileData($data);
		$data['allApplicant'] = $this->student_model->GetTotalApplicant($data);
		$data['allYouths'] = $this->student_model->GetTotalClubApplicant($data); 
		$data['allTrainee'] = $this->student_model->GetTotalLabApplicant($data);

		$data['requests'] = $this->student_model->AllApplicantsRequest($data);
		/*-----------------------------------------------------------------------------------*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_sidebar'] = $this->load->view('admin-pages/admin-sidebar.php',$data);
		$data['page_content'] = $this->load->view('admin-pages/Request.php',$data); /*content Loaded*/
		$data['page-footer'] = $this->load->view('included/page_footer.php',$data); 
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function ApprovedInClub($id){
		
		$id = $id; 
		$check = $this->student_model->AcceptApplicantRequest($id);
		redirect('UserHome/Request/');
	}
	

	/*all youth club students...*/
	public function YouthClub(){
		$data = array(); 

		$data['id'] = $this->session->userdata['profile_id']; 
		$data['profile_info'] = $this->user_model->profileData($data);
		$data['allApplicant'] = $this->student_model->GetTotalApplicant($data);
		$data['allYouths'] = $this->student_model->GetTotalClubApplicant($data); 
		$data['allTrainee'] = $this->student_model->GetTotalLabApplicant($data);

		$data['students'] = $this->student_model->AllYouthClubStudents($data);
		/*-----------------------------------------------------------------------------------*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_sidebar'] = $this->load->view('admin-pages/admin-sidebar.php',$data);
		$data['page_content'] = $this->load->view('admin-pages/YouthClub.php',$data); /*content Loaded*/
		$data['page-footer'] = $this->load->view('included/page_footer.php',$data); 
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function AddToLab($id,$trade){
		$data = array(); 
		$data['id'] = $id; 
		$data['trade'] = $trade; 

		$this->student_model->AddToLab($data);
		redirect('UserHome/YouthClub');
	}

	/*all youth club students...*/
	public function YouthLab(){
		$data = array(); 

		$data['id'] = $this->session->userdata['profile_id']; 
		$data['profile_info'] = $this->user_model->profileData($data);
		$data['allApplicant'] = $this->student_model->GetTotalApplicant($data);
		$data['allYouths'] = $this->student_model->GetTotalClubApplicant($data); 
		$data['allTrainee'] = $this->student_model->GetTotalLabApplicant($data);

		$data['students'] = $this->student_model->AllLabStudents($data);
		/*-----------------------------------------------------------------------------------*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_sidebar'] = $this->load->view('admin-pages/admin-sidebar.php',$data);
		$data['page_content'] = $this->load->view('admin-pages/YouthClub.php',$data); /*content Loaded*/
		$data['page-footer'] = $this->load->view('included/page_footer.php',$data); 
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

}