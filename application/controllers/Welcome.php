<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		function __construct() {

   			parent::__construct();	
			$this->load->model('Greetings', 'greetings');			
		}
		

	public function index()
	{
		$data['greetings']   = $this->greetings->readGreetings();		
		$this->load->view('welcome_message', $data);
	}

	public function insertGreetings()
	{
		
		$name 		= $this->input->post('name');
		$greetings  = $this->input->post('greetings');

		$data['greetings']   = $this->greetings->insertGreetings($name, $greetings);

		// $this->load->view('welcome_message');
		redirect('');
		// echo "Masuk Backend";
		// exit;
	}

	public function min()
	{
		$data['greetings']   = $this->greetings->readGreetings();		
		$this->load->view('admin', $data);
	}
}
