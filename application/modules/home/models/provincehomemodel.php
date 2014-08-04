<?php
class Provincehomemodel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_province()
	{
		$sql="SELECT * FROM province ORDER BY name ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>