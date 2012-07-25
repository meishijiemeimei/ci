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

}
?>
