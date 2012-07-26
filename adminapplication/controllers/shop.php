<?php
class Shop extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
  		$this->load->model('shop_model');
  		$date['shop']=$this->shop_model->get();
  		

  		$this->load->view('shop',$date);

 	}
 	public function addshop()
 	{
  		
  		$this->load->view('addshop');

  		
 	}
 	public function addshop_insert()
 	{
       
  		$this->load->model('shop_model');

  		$this->shop_model->addshop();
  		
  		$date['shop']=$this->shop_model->get();
  		redirect($base_url.'shop');

  		
 	}
 	public function delshop()
 	{
  		$this->load->model('shop_model');
  		$this->shop_model->delshop($this->uri->segment(3));
  		$date['shop']=$this->shop_model->get();
  		$this->load->view('shop',$date);

  		
 	}

}
?>
