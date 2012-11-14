<?php
class Login extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
  		$this->load->model('blog_model');
  		if ($_POST["name"]=='dongfangyicheng' && $_POST["pwd"]=='11223344a') {
  			$date['name']=$_POST["name"];
  			$this->load->view('loginsuss',$date);
  		}else{
  			$this->load->view('index');
  		}
  		

 	}

}
?>
