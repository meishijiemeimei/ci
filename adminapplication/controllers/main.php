<?php
class Main extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
  		$this->load->model('blog_model');
  		$date['news']=$this->blog_model->get();
  		

  		$this->load->view('main',$date);

 	}
 	public function addnews()
 	{
  		
  		$this->load->view('addnews');

  		
 	}
 	public function addnews_insert()
 	{
  		$this->load->model('blog_model');

  		$this->blog_model->addnews();
  		
  		$date['news']=$this->blog_model->get();
  		$this->load->view('main',$date);

  		
 	}
 	public function delnews()
 	{
  		$this->load->model('blog_model');
  		$this->blog_model->delnews($this->uri->segment(3));
  		$date['news']=$this->blog_model->get();
  		$this->load->view('main',$date);

  		
 	}

}
?>
