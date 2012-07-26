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

}
?>
