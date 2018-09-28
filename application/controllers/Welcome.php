<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Number');
		$this->load->database();
	}
	public function index()
	{	
		$data ['query']  = $this->Number->get_number();
		$this->load->view('welcome_message',$data);
	}
	public function random()
	{	
		$this->Number->random_number();
		redirect('/Welcome', 'refresh');
	}
		public function check()
	{	
		$data = $this->input->get("number");
		$result =  $this->Number->check($data);
		print_r($result);
	}
}
