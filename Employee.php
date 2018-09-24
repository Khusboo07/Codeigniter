<?php
class Employee extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Employee_Model');
	}
 
	public function index()
	{
		$this->load->view('registration');
		if($this->input->post('register'))
		{
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$p=$this->input->post('pass');
		$m=$this->input->post('mobile');
		
		$this->Employee_Model->saverecords($n,$e,$p,$m);		
		redirect("Employee/dispdata");  		
				
		}
	}
	
	public function dispdata()
	{
	$result['data']=$this->Employee_Model->displayrecords();
	$this->load->view('display_records',$result);
	}
}
?>