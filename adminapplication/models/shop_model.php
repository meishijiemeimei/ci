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
	 public function getsort()
 	{
  		$date= $this->db->get('shop_sort');
  		return $date->result();
 	}
	public function getshop($id)
 	{
  		$date=$this->db->query('SELECT * FROM shop LEFT JOIN shop_sort ON shop.shop_cid=shop_sort.shop_sort_id where shop_id = '.$id );
  		return $date->result();
 	}
	
	public function updateshop($id){
		$title=$_POST["title"];
 		$images=$_POST["shop_images"];
	    $content= addslashes($_POST["content1"]);		
		$cid=$_POST["sortid"];;
		$datetime=date('Y-m-d H:i:s');				
		$data = array(
               'shop_images' => $images,
               'shop_title' => $title,
			   'shop_content' => $content,
			   'shop_cid' => $cid,
               'shop_datetime' => $datetime
            );
		$this->db->where('shop_id', $id);
		$this->db->update('shop', $data); 
				
		
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
	
	
	
	
	
	
	
	
	public function getallsort()
 	{
		
  		$date=$this->db->query('SELECT * FROM shop_sort');
  		return $date->result();
 	}
	public function getonesort($onesortid)
 	{
		
  		$date=$this->db->query('SELECT * FROM shop_sort where shop_sort_id = '.$onesortid);
  		return $date->result();
 	}
	
	 public function getsortid($mysortid)
 	{
		
  		$date=$this->db->query('SELECT * FROM shop_sort where sort_id = '.$mysortid);
  		return $date->result();
 	}
	
	
 	public function addsort_insert()
 	{
 		$shop_sort_title=$_POST["shop_sort_title"];
 		$sort_id=$_POST["sort_id"];
	    $data = array(
               'shop_sort_title' => $shop_sort_title ,
               'sort_id' => $sort_id ,                
            );

		$this->db->insert('shop_sort', $data); 
 	}
	public function updatesort($id){
		$shop_sort_title=$_POST["shop_sort_title"];
 		$sort_id=$_POST["sort_id"];
	   	
		$data = array(
               'shop_sort_title' => $shop_sort_title,
               'sort_id' => $sort_id,
			  
            );
		 
		$this->db->where('shop_sort_id', $id);
		$this->db->update('shop_sort', $data); 
				
		
		}
	
	
 	 public function delsort($myid)
 	{
  		$date=$this->db->query('DELETE FROM shop_sort WHERE shop_sort_id='.$myid);
  		
 	}

}
?>
