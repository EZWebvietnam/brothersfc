<?php
class Newshomemodel extends CI_Model
{
	private $_name = 'news';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function list_new_slide()
	{
		$sql="SELECT * FROM {$this->_name} WHERE noi_bat = 1 ORDER BY id_new DESC LIMIT 5";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_new_content()
	{
		$sql="SELECT * FROM {$this->_name} ORDER BY id_new DESC LIMIT 6";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_new_li(array $id_new)
	{
		if(empty($id_new))
		{
			$sql="SELECT * FROM {$this->_name} ORDER BY id_new DESC LIMIT 8";
		}
		else
		{
			$id = implode(',',$id_new);
			$sql="SELECT * FROM {$this->_name} WHERE id_new NOT IN($id) ORDER BY id_new DESC LIMIT 8";
		}
		
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function list_new_clb_content()
	{
		$sql="SELECT * FROM {$this->_name} WHERE id_cate = 2 ORDER BY id_new DESC LIMIT 6";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_last_new()
	{
		$sql="SELECT * FROM {$this->_name} ORDER BY id_new DESC LIMIT 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function get_last_new_by_cate($id_cate)
	{
		$id_cate = intval($id_cate);
		$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? ORDER BY id_new DESC LIMIT 1";
		$query = $this->db->query($sql,array($id_cate));
		return $query->result_array();
	}
	public function list_new_list(array $id_last_new,$number,$offset)
	{
		$number = intval($number);
		$offset = intval($offset);
		if(empty($id_last_new))
		{
			$sql="SELECT * FROM {$this->_name} ORDER BY create_date DESC LIMIT ?,?";
		}
		else {
			$id_new = $id_last_new[0]['id_new'];
			$sql="SELECT * FROM {$this->_name} WHERE id_new NOT IN($id_new) ORDER BY create_date DESC LIMIT ?,?";
		}
		
		$query = $this->db->query($sql,array($offset,$number));
		return $query->result_array();
	}
	public function count_new_list(array $id_last_new)
	{
		if(empty($id_last_new[0]['id_new']))
		{
			$sql="SELECT * FROM {$this->_name} ORDER BY create_date DESC";
		}
		else
		{
			
			$id_new = $id_last_new[0]['id_new'];
			$sql="SELECT * FROM {$this->_name} WHERE id_new NOT IN ($id_new) ORDER BY create_date DESC";
		}
		$query = $this->db->query($sql);
		return count($query->result_array());
	}
	public function list_new_list_cate($id_cate,array $id_last_new,$number,$offset)
	{
		$id_cate = intval($id_cate);
		$number = intval($number);
		$offset = intval($offset);
		if(empty($id_last_new))
		{
			$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? ORDER BY create_date DESC LIMIT ?,?";
		}
		else {
			$id_new = $id_last_new[0]['id_new'];
			$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? AND id_new NOT IN($id_new) ORDER BY create_date DESC LIMIT ?,?";
		}
		
		$query = $this->db->query($sql,array($id_cate,$offset,$number));
		return $query->result_array();
	}
	public function count_new_list_cate($id_cate,array $id_last_new)
	{
		$id_cate = intval($id_cate);
		if(empty($id_last_new[0]['id_new']))
		{
			$sql="SELECT * FROM {$this->_name} WHERE id_cate = ?  ORDER BY create_date DESC";
		}
		else
		{
			
			$id_new = $id_last_new[0]['id_new'];
			$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? AND id_new NOT IN ($id_new) ORDER BY create_date DESC";
		}
		$query = $this->db->query($sql,array($id_cate));
		return count($query->result_array());
	}
	public function get_doc_nhieu()
	{
		$sql="SELECT * FROM {$this->_name} WHERE count_view > 100 ORDER BY create_date DESC LIMIT 5";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function new_detail($id_new)
	{
		$id_new = intval($id_new);
		$sql="SELECT * FROM {$this->_name} WHERE id_new = ?";
		$query = $this->db->query($sql,array($id_new));
		return $query->result_array();
	}
	public function list_new_by_cate($id_cate,$id_new)
	{
		$id_cate = intval($id_cate);
		$id_new = intval($id_new);
		$sql="SELECT * FROM {$this->_name} WHERE id_cate = ? AND id_new NOT IN(?) ORDER BY rand() LIMIT 4";
		$query = $this->db->query($sql,array($id_cate,$id_new));
		return $query->result_array();
	}
	public function update_view($id,array $data)
	{
		$this->db->where('id_new',$id);
		$this->db->update("{$this->_name}",$data);	
	}
	public function match_review($id_match)
	{
		$sql="SELECT * FROM {$this->_name} WHERE match_review = ?";
		$query = $this->db->query($sql,array($id_match));
		return $query->result_array();
	}
}
?>