<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
        // $this->load->library('session');
        // $this->load->helper('form');
    }

	public function index()
	{



		$mail_config['smtp_host'] = 'smtp.gmail.com';
		$mail_config['smtp_port'] = '587';
		$mail_config['smtp_user'] = 'chitraprakash346@gmail.com';
		$mail_config['_smtp_auth'] = TRUE;
		$mail_config['smtp_pass'] = 'spmysrqafguezprg';
		$mail_config['smtp_crypto'] = 'tls';
		$mail_config['protocol'] = 'smtp';
		$mail_config['mailtype'] = 'text';
		$mail_config['send_multipart'] = FALSE;
		$mail_config['charset'] = 'utf-8';
		$mail_config['wordwrap'] = TRUE;
		$this->email->initialize($mail_config);
		$this->email->set_newline("\r\n");

		$this->email->from('chitraprakash346@gmail.com', 'Prakash');
		$this->email->to('nelson.a@knowillence.com'); 
	//	$this->email->cc('prakash.p@sproutwins.in,nelson.a@sproutwings.in');
		   $message = "Hii This is For sample";

	   //  $this->email->to('karthik@sproutwings.in'); 
	 // $this->email->cc('prabhakaran.p@sproutwings.in');
		$this->email->subject('Smart Report');
	    $this->email->message($message);  

		//Send mail
		if($this->email->send())
		   echo "mail sent";
		else
		  show_error($this->email->print_debugger());
		  exit;
		  
		// $from_email = "email@example.com";
        // $to_email = $this->input->post('email');
        //Load email library
       // $this->load->library('email');
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.googlemail.com',
			'smtp_port' => '587',
			'smtp_user' => 'sproutwingsmailservice@gmail.com',
			'smtp_pass' => 'swi!@#123',
			'charset'   => 'utf-8'
		);


		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->set_mailtype("text");

		$this->email->from('sproutwingsmailservice@gmail.com', 'Sproutwings');
		$this->email->to('prakash.p@sproutwings.in'); 
	    $this->email->cc('nelson.a@sproutwings.in');
		$message = "
					Dear Customer, 

					PLease find Smart report

					thanks and regards,
					Sproutwings Telematics OPC Pvt Ltd.,
					Coimbatore.";

	//  $this->email->to('karthik@sproutwings.in'); 
  // $this->email->cc('prabhakaran.p@sproutwings.in');
	    $this->email->subject('Smart Report');
    	$this->email->message($message);  

        //Send mail

		if ($this->email->send()) {
            return true;
        } else {
            show_error($this->email->print_debugger());                
        }
		
        // if($this->email->send())
		// {
		// 	$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");

		// }
           
        // else
		// {
		// 	$this->session->set_flashdata("email_sent","You have encountered an error");
		// }
           
       $this->load->view('contact_email_form');

		//$this->load->view('welcome_message');
	}
}
