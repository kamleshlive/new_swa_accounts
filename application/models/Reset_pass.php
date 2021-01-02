<?php

// use Config;
class Reset_pass extends CI_Model {

 public function sendpassword($userData) {
        $this->load->config('email');
        $this->load->library('email');
        $this->load->library('parser');

  
   $email = $userData['email'];


   $query1 = $this->db->query("SELECT * from admissions where email='" . $email . "'");
   $row = $query1->result_array();
   // print_r($row);
   // die();

  

   if ($query1->num_rows() > 0) {

    $mail_message="";
    $check="";

       $this->load->library('email');
       $this->load->helper('email');
       $this->load->database();


       //SMTP & mail configuration
       $config = array(
           'protocol' => 'smtp',
           'mailpath' => 'C:\xampp\sendmail',
           'smtp_host' => 'ssl://smtp.google.email.com',
           'smtp_port' => 465,
           'smtp_user' => 'kamleshlive1@gmail.com',
           'smtp_pass' => 'Kamlesh1@',
           'mailtype' => 'html',
           'charset' => 'utf-8'
           
       );
       $this->email->initialize($config);
       $this->email->set_mailtype("html");
       $this->email->set_newline("\r\n");

       //Email content

       $this->email->from('kamleshlive1@gmail.com', 'Admin');
       $this->email->to($email);
       $this->email->subject('Password reset request');
       // $mail_message = 'Dear ' . $row[0]['full_name'] . ',' . "<br>\r\n";
       $mail_message .= 'Thanks for contacting regarding to forgot password,<br> Click On Link And Reset Password:<b><a href="http://www.ciadmin.local/welcome/update_password">Reset Password</a></b>'."\r\n";
       $mail_message .= '<br>Please Update your password.';
       $mail_message .= '<br>Thanks & Regards';
       $mail_message .= '<br>Red Feather Software';

       $this->email->message($mail_message);

       //Send email

       if ($this->email->send()) {
           return true;
       } else {
            return false;

       }
   }else{
    echo "Dsfasdf";
   }
}
}