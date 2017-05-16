<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {

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
$company=$_POST['company'];
$price=$_POST['price'];
$discription=$_POST['discription'];
$pic=$_FILES["pic"]["name"];
$size=$_POST['size'];
$make=$_POST['make'];
$model=$_POST['model'];
$year=$_POST['year'];

 $pic = $_FILES["pic"]["name"];
 
  $config = array(
'upload_path' => "./upload/",
'allowed_types' => "gif|jpg|png|jpeg|pdf",
'overwrite' => TRUE,
'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
'max_height' => "768",
'max_width' => "1024"
);
if(is_file($config['upload_path']))
{
    chmod($config['upload_path'], 777); ## this should change the permissions
}
 
$this->upload->initialize($config);
$this->load->library('upload', $config);

if($this->upload->do_upload('pic'))
{
$data = array('upload_data' => $this->upload->data());
}
else
{
$error = array('error' => $this->upload->display_errors());
print_r($error);
}

$this->db->query("INSERT INTO company(name,price,discription,make,model,year,image,size,created_on,status)
				VALUES('$company','$price','$discription','$make','$model','$year','$pic','$size',now(),'1')");
}
function user_data_result()
{
	$query = $this->db->query("select * from company where size='" .$_GET['size']. "' "); 
	if($query->num_rows() > 0)
{
	return $result = $query->result();
}
else {
    return false;
    }
	
}
}
