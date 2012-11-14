<?php
class Main_2 extends CI_Controller {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function index()
 	{
				
		$id = $this->uri->segment(4, 1);
		$sid = $this->uri->segment(3, 0); 		 

  		$this->load->model('shop_model');
		
		/*获取2个分类*/
  		$date['shopsort1']=$this->shop_model->getsort1();
		$date['shopsort2']=$this->shop_model->getsort2();
		/*获取当前分类*/
		if($sid!=0){
			$date['nowshopsort']=$this->shop_model->getonesort2($sid);
			}
		
		
		
		$user=$this->shop_model->user_select_all2($sid);
		$pageall=count($user);
		$pagenum=24;

		$config['total_rows']=$pageall;
		$config['per_page']=$pagenum;
		$config['num_links']=3;
		$config['base_url']="/product/index.php/main2/index/".$sid."/";
		$config['use_page_numbers']=true;
		$config['uri_segment'] = 4;
		$config['num_tag_open'] = '<span>';
		$config['num_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<span class="current">';
		$config['cur_tag_close'] = '</span>';
		
		
		
		$this->load->library("pagination");
		$this->pagination->initialize($config);
		$mypage=$this->pagination->create_links();


		$id=$id?$id:1;
		$start=($id-1)*$pagenum;
		if($sid==0){
			$date['shoplist']=$this->shop_model->user_select_limit($start,$pagenum);
		}
		else{
			$date['shoplist']=$this->shop_model->user_select_limit_sid($start,$pagenum,$sid);
		}
		$date['mypage']=$mypage;
		//var_dump($list);
		
		if($sid!=0){
			$this->load->view('main_2',$date);
			}else{
			$this->load->view('main_nosort2',$date);	
				
			}

  		

 	}

}
?>
