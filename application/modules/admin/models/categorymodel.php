<?php
class Categorymodel extends CI_Model
{
	private $_name ="cate_new";
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	public function load_cate($number, $offset) {
        $sql = "SELECT * FROM {$this->_name} LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	public function list_cate() {
        $sql = "SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_cate() {
        $sql = "SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
     public function cate_detail($id) {
        $sql = "SELECT * FROM {$this->_name} WHERE id_cate = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
	public function delete_cate($id) {
        $this->db->delete("{$this->_name}", array('id_cate' => $id));
    }
	public function add(array $data)
	{
		$this->db->insert("{$this->_name}",$data);
		return $this->db->insert_id();
	}
	public function update_cate($id,array $data)
	{
		$this->db->where('id_cate',$id);
		$this->db->update("{$this->_name}",$data);
	}	
}
?>