<?php
class Shop_model extends CI_Model  {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function get($listnum)
 	{
  		$date=$this->db->query('SELECT * FROM shop LEFT JOIN shop_sort ON shop.shop_cid=shop_sort.shop_sort_id ORDER BY shop_datetime desc LIMIT '.$listnum);
  		return $date->result();
 	}
	
	
	 public function getsort()
 	{
		
  		$date=$this->db->query('SELECT * FROM shop_sort');
		
  		return $date->result();
 	}
	 public function getonesort($sid)
 	{
		if($sid==0){
  			$date=$this->db->query('SELECT * FROM shop_sort');
		}else{
			$date=$this->db->query('SELECT * FROM shop_sort where shop_sort_id = '.$sid);
			}
  		return $date->result();
 	}
	
	
	function user_select_all($sid)
	{
		$this->db->select('*');
		if($sid==0){
			$query=$this->db->get('shop');
		}else{
			$query = $this->db->get_where('shop', array('shop_cid' => $sid));
		}
		return $query->result();
	}

	function user_select_limit_sid($start,$end,$sid)
	{
		        
		$this->db->select('*');
		$this->db->limit($end,$start);
		$query = $this->db->get_where('shop', array('shop_cid' => $sid));
		//$query=$this->db->get('shop',where('shop_cid' = $sid));
		return $query->result();
	}
	function user_select_limit($start,$end)
	{
		       
		$this->db->select('*');
		$this->db->limit($end,$start);
		$query=$this->db->get('shop');
		return $query->result();
	}

}
?>
