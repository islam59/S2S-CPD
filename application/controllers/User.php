<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$this->load->model('user_model'); 
		$data = array(); 
	}

	public function index()
	{
		$this->load->helper();
		$this->Login();
	}

	public function Login(){
		$data = array();
		$data['username']  = $this->input->post('username');
		$data['password']  = $this->input->post('password');

		$username = $data['username']; 
		$password = $data['password'];

		if(empty($username) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = 'loginNo'; 
			$this->session->set_flashdata($sdata);
			redirect('',$sdata); 
		}else{
			$this->user_model->userLogin($data);

			$sdata = array();
			$sdata['msg'] = 'loginYes'; 


			$check = $this->user_model->userLogin($data);
			if($check){
				$sdata = array(); 
				$sdata['id'] = $check->id; 
				$sdata['profile_id'] = $check->profile_id; 
				$sdata['username'] = $check->username; 
				$sdata['type'] = $check->type;
				$sdata['userlogin'] = TRUE; 
				$this->session->set_userdata($sdata);//set as session... 
				redirect('UserHome',$sdata);
			}else{
				$sdata = array();
				$sdata['msg'] = 'loginNo'; 
				$this->session->set_flashdata($sdata);
				redirect('',$sdata); 
			}
		}//end of empty checking..

	}//end of login controller..

	public function Logout(){
		//$uid = $this->session->id;
		//$this->login_model->userLoginOFF($uid);//update login status.OFF..
		$this->session->unset_userdata($id);
		$this->session->unset_userdata('userlogin',FALSE);
		$this->session->sess_destroy(); 
		redirect(''); 
	}
}
