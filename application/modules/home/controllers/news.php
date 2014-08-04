<?php
class News extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		parent::list_cate();
		$this->load->library('session');
		$this->load->library('tank_auth');
        $this->lang->load('tank_auth');
		$this->load->model('newshomemodel');
		$this->load->model('challengehomemodel');
		$this->load->model('catenewhomemodel');
		$this->data['next_match'] = $this->challengehomemodel->next_match();
		$this->data['doc_nhieu'] = $this->newshomemodel->get_doc_nhieu();
	}	
	public function list_new()
	{
		
		$this->data['last_new'] = $this->newshomemodel->get_last_new();
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(3);
		$config['per_page'] = 12;
		$config['total_rows'] = $this->newshomemodel->count_new_list($this->data['last_new']);
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->newshomemodel->list_new_list($this->data['last_new'],$config['per_page'], $page1);
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->data['main_content'] = 'list_new_view';
		$this->data['active'] = '0';
		
		$this->data['header']['title'] = "Tin tức | Futsal United Saigon";
		$this->load->view('home_layout/home_new_layout',$this->data);
	}
	public function list_post_by_id($id_cate = null)
	{
		$id_cate = explode('-',$id_cate);
		$id_cate = $id_cate[0];
		if(empty($id_cate))
		{
			show_404();
			exit;	
		}
		if(!is_numeric($id_cate))
		{
			show_404();
			exit;	
		}
		$this->data['cate_detail'] = $this->catenewhomemodel->cate_detail($id_cate);
		$this->data['last_new'] = $this->newshomemodel->get_last_new_by_cate($id_cate);
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(3);
		$config['per_page'] = 12;
		$config['total_rows'] = $this->newshomemodel->count_new_list_cate($id_cate,$this->data['last_new']);
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->newshomemodel->list_new_list_cate($id_cate,$this->data['last_new'],$config['per_page'], $page1);
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->data['main_content'] = 'list_new_cate';
		$this->data['active'] = $id_cate;
		$title = $this->data['cate_detail'][0]['title_cate'];
		$this->data['header']['title'] = "$title | Futsal United Saigon";
		$this->load->view('home_layout/home_new_layout',$this->data);
	}
	public function detail_new($id_new)
	{
		$id_new = explode('-',$id_new);
		$id_new = $id_new[0];
		if(empty($id_new))
		{
			show_404();exit;	
		}
		if(!is_numeric($id_new))
		{
			show_404();exit;	
		}
		$new_detail = $this->newshomemodel->new_detail($id_new);
		if(empty($new_detail))
		{
			show_404();exit;	
		}
		$count_view = $new_detail[0]['count_view']+1;
		$this->newshomemodel->update_view($id_new,array('count_view'=>$count_view));
		$this->data['cate_detail'] = $this->catenewhomemodel->cate_detail($new_detail[0]['id_cate']);
		$this->data['active'] = $new_detail[0]['id_cate'];
		$this->data['new_detail'] = $new_detail;
		$this->data['list_new_by_cate'] = $this->newshomemodel->list_new_by_cate($new_detail[0]['id_cate'],$id_new);
		$title = $new_detail[0]['title_new'];
		$this->data['header']['title'] = "$title | Futsal United Saigon";
		$this->data['main_content'] = 'new_detail';
		$this->data['header']['description'] = sub_string($new_detail[0]['des'],500);
		$this->load->view('home_layout/home_new_detail_layout',$this->data);
	}
	public function push_message_to_group()
	{
		$this->load->library('messagefb');
		$this->messagefb->post_message();
	}
}
?>