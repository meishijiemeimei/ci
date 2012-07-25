<?php
class Blog extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
  		$this->load->model('blog_model');
  		$date['id']=$this->blog_model->get();
  		$this->load->view('blog',$date);

 	}

}
?>
