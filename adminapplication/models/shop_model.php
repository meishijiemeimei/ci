<?php
class Shop_model extends CI_Model  {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function get()
 	{
  		$date=$this->db->query('SELECT * FROM shop');
  		return $date->result();
 	}
	 public function getsort1()
 	{
  		$date= $this->db->get('shop_sort1');
  		return $date->result();
 	}
	public function getsortone1($id)
 	{
		$date=$this->db->query('SELECT * FROM shop_sort1 where shop_sort_id1 = '.$id);
  		return $date->result();
 	}
	 public function getsort2()
 	{
  		$date= $this->db->get('shop_sort2');
  		return $date->result();
 	}
	public function getsortone2($id)
 	{
  		$date=$this->db->query('SELECT * FROM shop_sort2 where shop_sort_id2 = '.$id);
  		return $date->result();
 	}
	public function getshop($id)
 	{
  		$date=$this->db->query('SELECT * FROM shop LEFT JOIN shop_sort1 ON shop.shop_cid1=shop_sort1.shop_sort_id1 LEFT JOIN shop_sort2 ON shop.shop_cid2=shop_sort2.shop_sort_id2  where shop_id = '.$id );
  		return $date->result();
 	}
	
	public function updateshop($id){
		$title=$_POST["title"];
 		$images=$_POST["shop_images"];
	    $content= addslashes($_POST["content1"]);
		$area=$_POST["shop_area"];
		$cid1=$_POST["sortid1"];
		$cid2=$_POST["sortid2"];
		$datetime=date('Y-m-d H:i:s');				
		$data = array(
               'shop_images' => $images,
               'shop_title' => $title,
			   'shop_content' => $content,
			   'shop_area' => $area,
			   'shop_cid1' => $cid1,
			   'shop_cid2' => $cid2,
               'shop_datetime' => $datetime
            );
		$this->db->where('shop_id', $id);
		$this->db->update('shop', $data); 
				
		
		}
 	public function addshop()
 	{
 		$title=$_POST["title"];
 		$images=$_POST["shop_images"];
		$area=$_POST["shop_area"];
		$cid1=$_POST["sortid1"];
		$cid2=$_POST["sortid2"];
	    $content= addslashes($_POST["content1"]);
		$datetime=date('Y-m-d H:i:s');
		
		
  		$date=$this->db->query('INSERT INTO shop (shop_images,shop_title,shop_content,shop_area,shop_cid1,shop_cid2,shop_datetime) VALUES ("'.$images.'","'.$title.'","'.$content.'","'.$area.'","'.$cid1.'","'.$cid2.'","'.$datetime.'")');
  		
 	}
 	public function delshop($myid)
 	{
  		$date=$this->db->query('DELETE FROM shop WHERE shop_id='.$myid);
  		
 	}
	
	
	
	
	
	
	
	
	public function getallsort()
 	{
		
  		$date=$this->db->query('SELECT * FROM shop_sort1');
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
		if($sort_id==1){
			$data = array(
				   'shop_sort_title1' => $shop_sort_title ,
				   'sort_id1' => $sort_id ,                
				);
			$this->db->insert('shop_sort1', $data); 		
			
		}else{
			$data = array(
				   'shop_sort_title2' => $shop_sort_title ,
				   'sort_id2' => $sort_id ,                
				);
			$this->db->insert('shop_sort2', $data); 
			
		}
 	}
	public function updatesort1($id){
		$shop_sort_title=$_POST["shop_sort_title1"];
 		$sort_id=$_POST["sort_id1"];
	   	
		$data = array(
               'shop_sort_title1' => $shop_sort_title,
              // 'sort_id1' => $sort_id,
			  
            );
		 
		$this->db->where('shop_sort_id1', $id);
		$this->db->update('shop_sort1', $data); 
				
		
		}
	public function updatesort2($id){
		$shop_sort_title=$_POST["shop_sort_title2"];
 		$sort_id=$_POST["sort_id2"];
	   	
		$data = array(
               'shop_sort_title2' => $shop_sort_title,
               //'sort_id' => $sort_id,
			  
            );
		 
		$this->db->where('shop_sort_id2', $id);
		$this->db->update('shop_sort2', $data); 
				
		
		}
	
	
 	 public function delsort1($myid)
 	{
  		$date=$this->db->query('DELETE FROM shop_sort1 WHERE shop_sort_id1='.$myid);
  		
 	}
	 public function delsort2($myid)
 	{
  		$date=$this->db->query('DELETE FROM shop_sort2 WHERE shop_sort_id2='.$myid);
  		
 	}

}
?>
