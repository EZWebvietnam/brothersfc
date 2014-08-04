<?php
class Imagehomemodel extends CI_Model
{
	private $_name = "image_fust";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}	
	public function list_image()
	{
		$sql = "SELECT * FROM {$this->_name}";	
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_clip_image($number,$offset)
	{
		$sql ="SELECT * FROM {$this->_name} LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();	
	}
	public function count_clip_image()
	{
		$sql ="SELECT * FROM {$this->_name}";
		$query = $this->db->query($sql);
		return count($query->result_array());	
	}
}
?>