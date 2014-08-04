<?php
class Votehomemodel extends CI_Model
{
	private $_name = "vote_mom";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}	
	public function get_vote($first_day,$last_day,$id_vote)
	{
		$sql="SELECT * FROM {$this->_name} WHERE '$first_day' <=time AND time <= '$last_day' AND id_user = $id_vote";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function vote_insert(array $data)
	{
		$this->db->insert("{$this->_name}",$data);
		return $this->db->insert_id();
	}
	public function get_vote_all($first_day,$last_day,$id_user)
	{
		$sql="SELECT count(*) as total_result FROM {$this->_name} WHERE '$first_day' <=time AND time <= '$last_day' AND id_vote = $id_user";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>