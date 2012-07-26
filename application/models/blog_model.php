<?php
class Blog_model extends CI_Model  {
	function __construct()
 	{
  		parent::__construct();
 	}

	 public function get($listnum)
 	{
  		$date=$this->db->query('SELECT * FROM blog LEFT JOIN sort ON blog.blog_cid=sort.sort_id ORDER BY blog_datetime desc LIMIT '.$listnum);
  		return $date->result();
 	}

}
?>
