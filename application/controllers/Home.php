<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
		$data = array(); 

	}

	public function index()
	{
		if(isset($this->session->userdata['userlogin'])){
			redirect('UserHome/Dashboard');
		}
		$this->load->helper();
		$this->HomePage();
	}


	public function HomePage(){ /* HOME PAGE FUNCITON */
		/*-----------------------------------------------------------------------------------*/
		$data['activated_home'] = 'fh5co-active'; /*SET ACTIVATED CLASS*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		$data['introfor'] = 'HomePage'; 
		$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); /*get site intro*/
		$data['gallerycontents'] = $this->gallery_model->GetGalleryContentsData($data); 
		//$data['galleryimage'] = $this->gallery_model->GetSingleImageByLastUpload($data); 
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/home_content.php',$data); /*Content Loaded*/
		$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function AboutPage(){ /* About PAGE FUNCITON */
		/*-----------------------------------------------------------------------------------*/
		$data['activated_about'] = 'fh5co-active'; 
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); 
		$data['introfor'] = 'AboutPage'; 
		$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); /*get site intro*/
		$data['gallerycontents'] = $this->gallery_model->GetGalleryContentsData($data); 
		$data['about_content'] = $this->employability_model->GetEmpContentById($data);
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/about_content.php',$data); /*Content Loaded*/
		$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function TrainersPage(){ /* Trainers PAGE FUNCITON */
		/*-----------------------------------------------------------------------------------*/
		$data['activated_trainer'] = 'fh5co-active'; 
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data);
		$data['authorities'] = $this->authority_model->GetAllAuthority($data);
		$data['introfor'] = 'TrainersPage'; 
		$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); /*get site intro*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/trainers_content.php',$data); /*Content Loaded*/
		$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function ContactUs(){ /* Trainings PAGE FUNCITON */
		/*-----------------------------------------------------------------------------------*/
		$data['activated_trainings'] = 'fh5co-active'; 
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); 
		$data['introfor'] = 'TrainingsPage'; 
		$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); /*get site intro*/
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/contact_us.php',$data); /*Content Loaded*/
		$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function SendMessage()
	{		
		$data['message_sender'] = $this->input->post('message_sender'); 
		$data['message_subject'] = $this->input->post('message_subject'); 
		$data['message_body'] = $this->input->post('message_body');  

		if(empty($data['message_sender']) OR empty($data['message_subject']) OR empty($data['message_body'])){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;" class="btn"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Home/ContactUs',$sdata); 
		}else{
			$this->message_model->SaveSendMessage($data); 
			
			$sdata = array();
			echo $sdata['msg'] = '<span style="color:green; class="btn"> Send Successfully !</script>'; 
			$this->session->set_flashdata($sdata);
			redirect('Home/ContactUs',$sdata); 
		}
	}

	public function Gallery(){ /* HOME PAGE FUNCITON */
		//$data['keydata'] = $this->keydata; 
		/*-----------------------------------------------------------------------------------*/
		$data['activated_home'] = ''; /*SET ACTIVATED CLASS*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		//$data['introfor'] = 'HomePage'; 
		//$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); /*get site intro*/
		//$data['gallerycontents'] = $this->gallery_model->GetGalleryContentsData($data); 
		$data['galleryimage'] = $this->gallery_model->GetAllGalleryImages($data); 
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		//$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/gallery.php',$data); /*Content Loaded*/
		$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}

	public function StudentRegister(){ /* HOME PAGE FUNCITON */
		/*-----------------------------------------------------------------------------------*/
		$data['activated_home'] = 'fh5co-active'; /*SET ACTIVATED CLASS*/
		$data['siteinfo'] = $this->siteinfo_model->GetSiteinfoByID($data); /*get site info*/
		$data['introfor'] = 'HomePage'; 
		$data['introduction'] = $this->intro_model->GetSiteIntroByKey($data); 

		$data['cms'] = $this->authority_model->GetCmInfo($data); 
		$data['batches'] = $this->batch_model->GetAllBatch($data); 
		
		/*-----------------------------------------------------------------------------------*/
		$data['page_header'] = $this->load->view('included/page_header.php',$data); /*Header Loaded*/
		//$data['page_intro'] = $this->load->view('pages/introduction.php',$data); /*pageintro Loaded*/
		$data['page_content'] = $this->load->view('pages/registration-form.php',$data); /*Content Loaded*/
		//$data['page_contact'] = $this->load->view('included/page_contact',$data); /*contact Loaded*/
		$data['page_footer'] = $this->load->view('included/page_footer.php',$data); /*footer Loaded*/
		/*-----------------------------------------------------------------------------------*/
		$this->load->view('index',$data); /*LOAD TO MASTER PAGE*/
	}
	public function SaveStudentApplication()
	{		
		$data['batch_id'] = $this->input->post('batch_id'); 
		$data['author_id'] = $this->input->post('author_id'); 

		$data['house_road_no'] = $this->input->post('house_road_no'); 
		$data['slum_name'] = $this->input->post('slum_name'); 
		$data['block_line_name'] = $this->input->post('block_line_name'); 
		$data['area_name'] = $this->input->post('area_name'); 
		$data['landmark'] = $this->input->post('landmark'); 
		$data['thana'] = $this->input->post('thana'); 
		$data['ward'] = $this->input->post('ward'); 
		$data['city_corporation'] = $this->input->post('city_corporation'); 

		$data['youth_name'] = $this->input->post('youth_name'); 
		$data['birthdate'] = $this->input->post('birthdate'); 
		$data['sex'] = $this->input->post('sex'); 
		$data['educational_status'] = $this->input->post('educational_status'); 
		$data['grade_completed'] = $this->input->post('grade_completed'); 
		$data['grade_continuing'] = $this->input->post('grade_continuing'); 
		$data['working_status'] = $this->input->post('working_status'); 
		$data['work_type'] = $this->input->post('work_type'); 
		$data['salary'] = $this->input->post('salary'); 
		$data['company_address'] = $this->input->post('company_address'); 

		$data['disability_type'] = $this->input->post('disability_type'); 

		$data['mothers_name'] = $this->input->post('mothers_name'); 
		$data['fathers_name'] = $this->input->post('fathers_name'); 
		$data['guardian_name'] = $this->input->post('guardian_name'); 
		$data['mothers_occupation'] = $this->input->post('mothers_occupation'); 
		$data['fathers_occupation'] = $this->input->post('fathers_occupation'); 
		$data['youth_contact_number'] = $this->input->post('youth_contact_number'); 
		$data['father_contact_number'] = $this->input->post('father_contact_number'); 
		$data['mother_contact_number'] = $this->input->post('mother_contact_number'); 

		$data['parmanent_village_name'] = $this->input->post('parmanent_village_name'); 
		$data['parmanent_post_office'] = $this->input->post('parmanent_post_office'); 
		$data['parmanent_thana'] = $this->input->post('parmanent_thana'); 
		$data['parmanent_district'] = $this->input->post('parmanent_district'); 
		$data['parmanent_division'] = $this->input->post('parmanent_division'); 

		$data['profile_picture'] = $this->input->post('profile_picture'); 


		if(empty($data['batch_id']) OR empty($data['author_id']) OR empty($data['youth_name'])){
			$sdata = array();
			$sdata['msgReg'] = '<span class="alert alert-success"> &nbsp; Field Must Not Empty !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Home/StudentRegister',$sdata); 
		}else{
			$this->student_model->SaveStudentData($data); 
			
			$sdata = array();
			echo $sdata['msgReg'] = '<span class="alert alert-success"> Successfully Registered !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('Home/StudentRegister',$sdata); 
		}

	}
}
