<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Register_ctr extends CI_Controller {

	public function __construct() {
        parent:: __construct();
        $this->load->library('session');
        $this->load->model('Admin_model');
        
      }
     	
	public function index()
	{
		$this->load->view('login');
		//$this->load->view('home');
	}
	
	public function login()
	{

		$data = $userData = array(); 

	 	 if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password', 'required'); 

            	$userData = array(           
                'email' => strip_tags($this->input->post('email')), 
                'password' => $this->input->post('password'), 
                 ); 

            	// var_dump($userData);exit;

            	if($this->form_validation->run() == true){ 
            		
            	 	 $check = $this->Admin_model->checkLogin($userData); 

               	 if($check){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
		}
		
	
		 // Posted data 
        $data['user'] = $userData; 
         
        // Load view 
        $this->load->view('login', $data); 
		
}


   
}
