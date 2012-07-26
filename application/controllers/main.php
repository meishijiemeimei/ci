<?php
class Main extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
  		$this->load->model('blog_model');
  		$date['list']=$this->blog_model->get(7);

  		$this->load->model('shop_model');
  		$date['shoplist']=$this->shop_model->get(7);

  		$this->load->view('main',$date);

 	}

}
?>
