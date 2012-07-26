<?php
class Shop_model extends CI_Model  {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function get()
 	{
  		$date=$this->db->query('SELECT * FROM shop LEFT JOIN shop_sort ON shop.shop_cid=shop_sort.shop_sort_id');
  		return $date->result();
 	}
 	public function addshop()
 	{
 		$title=$_POST["title"];
 		$images=$_POST["shop_images"];
	    $content= addslashes($_POST["content1"]);

		$cid='1';
		$datetime=date('Y-m-d H:i:s');
		
		
  		$date=$this->db->query('INSERT INTO shop (shop_images,shop_title,shop_content,shop_cid,shop_datetime) VALUES ("'.$images.'","'.$title.'","'.$content.'","'.$cid.'","'.$datetime.'")');
  		
 	}
 	public function delshop($myid)
 	{
  		$date=$this->db->query('DELETE FROM shop WHERE shop_id='.$myid);
  		
 	}

}
?>
