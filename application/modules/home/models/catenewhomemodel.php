<?php
class Catenewhomemodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}
	public function list_cate()
	{
		$sql="SELECT * FROM cate_new";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function cate_detail($id_cate)
	{
		$id_cate = intval($id_cate);
		$sql="SELECT * FROM cate_new WHERE id_cate = ?";
		$query = $this->db->query($sql,array($id_cate));
		return $query->result_array();
	}
}
?>