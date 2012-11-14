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
	
	
	 public function getsort1()
 	{		
  		$date=$this->db->query('SELECT * FROM shop_sort1');		
  		return $date->result();
 	}
	public function getsort2()
 	{		
  		$date=$this->db->query('SELECT * FROM shop_sort2');		
  		return $date->result();
 	}
	
	 public function getonesort($sid)
 	{
		if($sid==0){
  			$date=$this->db->query('SELECT * FROM shop_sort1');
		}else{
			$date=$this->db->query('SELECT * FROM shop_sort1 where shop_sort_id1 = '.$sid);
			}
  		return $date->result();
 	}
	public function getonesort2($sid)
 	{
		if($sid==0){
  			$date=$this->db->query('SELECT * FROM shop_sort2');
		}else{
			$date=$this->db->query('SELECT * FROM shop_sort2 where shop_sort_id2 = '.$sid);
			}
  		return $date->result();
 	}
	
	function user_select_all($sid)
	{
		$this->db->select('*');
		if($sid==0){
			$query=$this->db->get('shop');
		}else{
			$query = $this->db->get_where('shop', array('shop_cid1' => $sid));
		}
	 
		$this->db->join('shop_sort1', 'shop.shop_cid1=shop_sort1.shop_sort_id1');
		$this->db->join('shop_sort2', 'shop.shop_cid2=shop_sort2.shop_sort_id2');
		return $query->result();
	}
	function user_select_all2($sid)
	{
		$this->db->select('*');
		if($sid==0){
			$query=$this->db->get('shop');
		}else{
			$query = $this->db->get_where('shop', array('shop_cid2' => $sid));
		}		
		$this->db->join('shop_sort2', 'shop.shop_cid2=shop_sort2.shop_sort_id2');
		$this->db->join('shop_sort1', 'shop.shop_cid1=shop_sort1.shop_sort_id1');
		return $query->result();
	}

	function user_select_limit_sid($start,$end,$sid)
	{
		        
		$this->db->select('*');
		$this->db->limit($end,$start);
		$query = $this->db->get_where('shop', array('shop_cid1' => $sid));
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
	function user_select_limit_sid2($start,$end,$sid)
	{
		        
		$this->db->select('*');
		$this->db->limit($end,$start);
		$query = $this->db->get_where('shop', array('shop_cid2' => $sid));
		//$query=$this->db->get('shop',where('shop_cid' = $sid));
		return $query->result();
	}
	function user_select_limit2($start,$end)
	{
		       
		$this->db->select('*');
		$this->db->limit($end,$start);
		$query=$this->db->get('shop');
		return $query->result();
	}

}
?>
