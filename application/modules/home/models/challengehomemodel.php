<?php
class Challengehomemodel extends CI_Model
{
	private $_name ="challenge";
	public function __construct()	
	{
		parent::__construct();
		$this->load->database();	
	}
	public function next_match()
	{
		$sql="SELECT * FROM {$this->_name} WHERE time>=now() AND confirm = 1 ORDER BY time ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_challenge_month($first_day,$last_day)
	{
		$sql="SELECT * FROM {$this->_name} WHERE now() <=time AND time<= '$last_day 23:59:59' AND confirm = 1 ORDER BY time ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function detail($id = null)
	{
		$sql="SELECT * FROM {$this->_name} WHERE  confirm = 1 AND id_challenge = ?";
		$query = $this->db->query($sql,array($id));
		return $query->result_array();
	}
	public function insert_challenge(array $data)
	{
		$this->db->insert("$this->_name",$data);
		return $this->db->insert_id();
	}
}
?>