<?php
class Newsmodel extends CI_Model
{
	private $_name ="news";
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_new($number,$offset)
    {
        $sql="SELECT * FROM {$this->_name} LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_new()
    {
        $sql="SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function insert(array $data)
    {
        $this->db->insert("{$this->_name}",$data);
        return $this->db->insert_id();
    }
    public function detail($id)
    {
        $sql="SELECT * FROM {$this->_name} WHERE id_new = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update($id,array $data)
    {
        $this->db->where('id_new',$id);
        $this->db->update("{$this->_name}",$data);
    }
    public function delete($id)
    {
        $this->db->delete("{$this->_name}",array('id_new'=>$id));
    }
	public function list_match_review($id)
    {
        $sql="SELECT * FROM {$this->_name} WHERE match_review = ?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }
	public function list_new_fb()
    {
        $sql="SELECT * FROM {$this->_name}";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>