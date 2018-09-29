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
		$datashow ['query']  = $this->Number->get_number();
		$this->load->view('welcome_message',$datashow);
		$data = $this->input->get("number");
		$result =  $this->Number->check($data);
		if($result['award'] == 0 && $result['award2'] == 0 && $result['award3'] == 0 && $result['award4'] == 0){
			$result['number'] = $result['number']." ไม่ถูกรางวัลใดเลย";
			$this->load->view('show',$result);
		}
		elseif ($result['award'] == 1 && $result['award4'] == 1  ) {
			$result['number'] = $result['number']." ถูกรางวัลที่ 1 และรางวัล 2 ตัวท้าย";
			$this->load->view('show',$result);
		}
		elseif ($result['award2'] == 1 && $result['award4'] == 1  ) {
			$result['number'] = $result['number']." ถูกรางวัลที่ 2 และรางวัล 2 ตัวท้าย";
			$this->load->view('show',$result);
		}
		elseif ($result['award3'] == 1 && $result['award4'] == 1  ) {
			$result['number'] = $result['number']." ถูกรางวัลข้างเคียงรางวัลที่ 1 และรางวัล 2 ตัวท้าย";
			$this->load->view('show',$result);
		}
		elseif ($result['award2'] == 1) {
			$result['number'] = $result['number']." ถูกรางวัลที่ 2";
			$this->load->view('show',$result);
		}
		elseif ($result['award4'] == 1) {
			$result['number'] = $result['number']." ถูกรางวัล 2 ตัวท้าย";
			$this->load->view('show',$result);
		}
		elseif ($result['award3'] == 1) {
			$result['number'] = $result['number']." ถูกรางวัลข้างเคียงรางวัลที่ 1";
			$this->load->view('show',$result);
		}
		elseif ($result['award'] == 1) {
			$this->load->view('showjackpot',$result);
		}
	}
}
