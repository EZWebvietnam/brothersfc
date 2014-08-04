<?php
class Resulthomemodel extends CI_Model
{
	private $_name = 'result';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	public function get_result($number,$offset)
	{
		$sql ="SELECT * FROM {$this->_name} INNER JOIN challenge ON challenge.id_challenge = {$this->_name}.id_challenge WHERE challenge.confirm = 1 ORDER BY id_result DESC LIMIT ?,?";
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_result()
	{
		$sql ="SELECT * FROM {$this->_name} INNER JOIN challenge ON challenge.id_challenge = {$this->_name}.id_challenge WHERE challenge.confirm = 1";
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
}
?>