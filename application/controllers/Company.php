<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
	 function __construct()
 {
   parent::__construct();
  
  

 }
	public function index()
	{
		$this->load->view('company');
	}
	public function add()
	{
	$this->load->model('Company_model');
	$this->Company_model->insert();
	$this->load->view('company');//loading success view
	}
	public function get() {
		$this->load->model('Company_model');
		$query['annunci']=$this->Company_model->user_data_result();
   $this->load->view('detail',$query);
}
}
