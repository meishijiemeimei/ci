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
	/*public function getshop()
 	{
        $id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		
  		$date['shop']=$this->shop_model->getshop($id);
		$date['shopsort']=$this->shop_model->getsort();
  		$this->load->view('editshop');

  		
 	}*/
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
		
		$date['shopsort1']=$this->shop_model->getsort1();
		$date['shopsort2']=$this->shop_model->getsort2();
		
  		$this->load->view('editshop',$date);

  		
 	}
 	public function addshop()
 	{
  		$this->load->model('shop_model');
  		
  		 
		$date['shopsort1']=$this->shop_model->getsort1();
  		$date['shopsort2']=$this->shop_model->getsort2();
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
		if($sortid==1){  		
  			$date['sort1']=$this->shop_model->getsort1();
			$this->load->view('allsort1',$date);
		}else{
			$date['sort2']=$this->shop_model->getsort2();
			$this->load->view('allsort2',$date);
			}

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
	public function delsort1()
 	{
		$sortid = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->delsort1($sortid);
  		 
  		$sortid = $this->uri->segment(3, 1);
		 
		if($sortid==1){  		
  			$date['sort1']=$this->shop_model->getsort1();
			 redirect('/shop/allsort/1');
			$this->load->view('allsort/1',$date);
			
		}else{
			$date['sort2']=$this->shop_model->getsort2();
			 redirect('/shop/allsort/2');
			$this->load->view('allsort/2',$date);
			} 		 
		
  		
 	}
	public function delsort2()
 	{
		$sortid = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->delsort2($sortid);
  		 
  		 
		$date['sort']=$this->shop_model->getallsort();
		redirect('/shop/allsort');
  		$this->load->view('allsort',$date);
  		
 	}
	public function editsort1()
 	{
  		
  		$id = $this->uri->segment(3, 1); 	
		$this->load->model('shop_model');
  		$date['sort']=$this->shop_model->getsortone1($id);
		$this->load->view('editsort1',$date);
	
 	}
	public function editsort2()
 	{
  		
  		$id = $this->uri->segment(3, 1); 
		$this->load->model('shop_model');
  		$date['sort']=$this->shop_model->getsortone2($id);
		$this->load->view('editsort2',$date);
	
 	}
	public function editsort_update1()
 	{
       	$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->updatesort1($id);
  		redirect('/shop/allsort');
  		
 	}
	public function editsort_update2()
 	{
       	$id = $this->uri->segment(3, 1);
  		$this->load->model('shop_model');
  		$this->shop_model->updatesort2($id);
  		redirect('/shop/allsort');
  		
 	}

}
?>
