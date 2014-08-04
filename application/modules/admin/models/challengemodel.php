<?php
class Challengemodel extends CI_Model
{
	private $_name ="challenge";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
	}
	public function list_challenge($number, $offset)
	{
		$sql = "SELECT * FROM {$this->_name} ORDER BY time DESC LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	public function count_challenge() {
        $sql = "SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
	public function view($id)
	{
		$sql = "SELECT * FROM {$this->_name} WHERE id_challenge = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
	}
	public function update($id,array $data)
	{
		$this->db->where('id_challenge',$id);
		$this->db->update("$this->_name",$data);	
	}
	public function delete($id)
	{
		$this->db->delete("$this->_name",array('id_challenge'=>$id));	
	}
	public function list_challenge_result()
	{
		$sql = "SELECT * FROM {$this->_name} INNER JOIN result ON result.id_challenge = {$this->_name}.id_challenge";
        $query = $this->db->query($sql);
        return $query->result_array();
	}
	public function check_challenge_result($id)
	{
		$sql = "SELECT * FROM result WHERE id_challenge = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
	}
	public function insert_result(array $data)
	{
		$this->db->insert("result",$data);	
		return $this->db->insert_id();
	}
}
?>