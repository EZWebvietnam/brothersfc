<?php
class Youtubehomemodel extends CI_Model
{
	private $_name = "youtube";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}	
	public function list_youtube()
	{
		$sql ="SELECT * FROM {$this->_name}";
		$query = $this->db->query($sql);
		return $query->result_array();	
	}
	public function detail_youtube($code)
	{
		$sql ="SELECT * FROM {$this->_name} WHERE code_youtube = '%$code%' ";
		$query = $this->db->query($sql);
		return $query->result_array();	
	}
	public function insert_youtube(array $data)
	{
		$this->db->insert("{$this->_name}",$data);	
	}
	public function list_clip_youtube($number,$offset)
	{
		$sql ="SELECT * FROM {$this->_name} LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();	
	}
	public function count_clip_youtube()
	{
		$sql ="SELECT * FROM {$this->_name}";
		$query = $this->db->query($sql);
		return count($query->result_array());	
	}
}
?>