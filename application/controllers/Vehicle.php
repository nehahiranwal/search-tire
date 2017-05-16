<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

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
	public function index()
	{
		$this->load->view('search');
	}
	public function show(){
		 
         $this->load->view('add'); 
        
		
	}
	public function add()
	{
	$this->load->model('Vehicle_model');
	$this->Vehicle_model->insert();
	$this->load->view('add');
	//loading success view
	}
	public function user_data_get() {
   $this->load->model('Vehicle_model');
    $output=$this->Vehicle_model->user_data_result();
	
	header('Content-Type: application/json');
	
//Either you can print value or you can send value to database
echo json_encode($output);
}

}
