<?php
class Blog_model extends CI_Model  {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function get()
 	{
  		$date=$this->db->query('SELECT * FROM blog LEFT JOIN sort ON blog.cid=sort.sort_id');
  		return $date->result();
 	}
 	public function addnews()
 	{
 		$title=$_POST["title"];
	    $content=$_POST["content"];
		$cid='1';
		$datetime=date('Y-m-d H:i:s');
		
		
  		$date=$this->db->query('INSERT INTO blog (title,content,cid,datetime) VALUES ("'.$title.'","'.$content.'","'.$cid.'","'.$datetime.'")');
  		
 	}
 	public function delnews($myid)
 	{
  		$date=$this->db->query('DELETE FROM blog WHERE blog_id='.$myid);
  		
 	}

}
?>
