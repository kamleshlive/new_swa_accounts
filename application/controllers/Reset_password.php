<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// use Reset_pass;
class Reset_password extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('session');
        $this->load->model('Reset_pass');
        $this->load->database();
        $this->load->helper('url');
        
        
    }
    public function index()
    {
      $this->load->view('resetpassword');
      $this->load->helper('email');
      $this->load->library('form_validation');
    }
    
    
    public function resetPassword(){
      $this->load->view('resetpassword');
    }

    public function checkEmailAndSendMail(){
      $email = $this->input->post();
      $checkMail = true;
      // if()
    }
    
    Public function reset_update()
    {
        $check = "";
        
        if ($this->input->post('reset_password')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            
            
            $userData = array(
                'email' => strip_tags($this->input->post('email'))
            );
            
            if ($this->form_validation->run() == true) {
                
                // $validate_email=$this->reset_pass->validate_email($userData);
                // if($validate_email){
                
                //    $check = $this->Reset_pass->sendpassword($userData); 
                //    {
                //  if ($check) 
                //   echo "valid_email";
                // }
                // }else{
                //  echo "Invalid email";
                // }
                
                if ($check) {
                    echo "Valid mail";
                } else {
                    echo "Invalid email";
                }
                // }else{
                
                //  echo "invalid mail id";
                // }
                
                
                //        }else{
                // // echo "sdfjaskjdfljflaf";
                
                //        }
                
                
                // }else{
                //     echo "Invalid email";
                
            }
        }
    }
}