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
	public function getshop()
 	{
        $id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		
  		$date['shop']=$this->shop_model->getshop($id);
		$date['shopsort']=$this->shop_model->getsort();
  		$this->load->view('editshop');

  		
 	}
	public function editshop_update()
 	{
       	$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->updateshop($id);
  		redirect('shop');
  		
 	}
	public function editshop()
 	{
  		
  		$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		
  		$date['shop']=$this->shop_model->getshop($id);
		$date['shopsort']=$this->shop_model->getsort();
  		$this->load->view('editshop',$date);

  		
 	}
 	public function addshop()
 	{
  		$this->load->model('shop_model');
  		
  		 
		$date['shopsort']=$this->shop_model->getsort();
  		 
  		$this->load->view('addshop',$date);

  		
 	}
 	public function addshop_insert()
 	{
       
  		$this->load->model('shop_model');

  		$this->shop_model->addshop();
  		
  		$date['shop']=$this->shop_model->get();
  		redirect('shop');

  		
 	}
 	public function delshop()
 	{
  		$this->load->model('shop_model');
  		$this->shop_model->delshop($this->uri->segment(3));
  		$date['shop']=$this->shop_model->get();
  		$this->load->view('shop',$date);

  		
 	}
	
	
	





	 public function allsort()
 	{
		$sortid = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$date['sort']=$this->shop_model->getsortid($sortid);
  		

  		$this->load->view('allsort',$date);

 	}
	
	
	public function addsort()
 	{
  		 
  		$this->load->view('addsort');
 	}
	
	public function addsort_insert()
 	{
       
  		$this->load->model('shop_model');
  		$this->shop_model->addsort_insert();
  		redirect('/shop/allsort');
  		
 	}
	public function delsort()
 	{
		$sortid = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->delsort($sortid);
  		 
  		 
		$date['sort']=$this->shop_model->getallsort();
		redirect('/shop/allsort');
  		$this->load->view('allsort',$date);
  		
 	}
	public function editsort()
 	{
  		
  		$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		
  		$date['sort']=$this->shop_model->getonesort($id);
		
  		$this->load->view('editsort',$date); 
 	}
	public function editsort_update()
 	{
       	$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->updatesort($id);
  		redirect('/shop/allsort');
  		
 	}

}
?>
