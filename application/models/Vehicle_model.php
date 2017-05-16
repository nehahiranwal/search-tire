<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

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
	function insert()
{
// create a variable

$make=$_POST['make'];
$model=$_POST['model'];
$year=$_POST['year'];
$size=$_POST['size'];
$body=$_POST['body'];

$this->db->query("INSERT INTO vehicle(make,model,year,size,body,created_on,status)
				VALUES('$make','$model','$year','$size','$body',now(),'1')");
}

function user_data_result()
{
$query = $this->db->query("select * from vehicle where  make = '" .$_POST['make']. "' AND model='" .$_POST['model']. "'  AND year='" .$_POST['year']. "'AND body='" .$_POST['body']. "' ");
if($query->num_rows() > 0)
{
	return $result = $query->result();
}
else {
    return false;
    }
}

}
