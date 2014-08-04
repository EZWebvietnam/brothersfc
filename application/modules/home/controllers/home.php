<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        parent::list_cate();
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
		$this->load->model('newshomemodel');
		$this->load->model('imagehomemodel');
		$this->load->model('youtubehomemodel');
		$this->load->model('challengehomemodel');
		$this->load->model('abouthomemodel');
    }

    public function index() {
		
		$this->data['news_slide'] = $this->newshomemodel->list_new_slide();
		$this->data['list_new_content'] = $this->newshomemodel->list_new_content();
		$list_new = array();
		foreach($this->data['list_new_content'] as $k=>$va)
		{
			$list_new[$va['id_new']] = $va['id_new'];
		}
		$this->data['about_fust'] = $this->abouthomemodel->get_about(1);
		$this->data['list_new_clb'] = $this->newshomemodel->list_new_clb_content();
		$truyen_thong = $this->data['list_new_clb'];
		$count = count($this->data['list_new_clb']);
		if($count>0)
		{
			$array_rand = array("$count","$count-1","$count-2");
			$rand_keys = array_rand($truyen_thong, 3);
			$this->data['truyen_thong']=$truyen_thong;
		}	
		
		$this->data['list_new_li'] = $this->newshomemodel->list_new_li($list_new);
		$this->data['list_image'] = $this->imagehomemodel->list_image();
		$this->data['list_yoututbe'] = $this->youtubehomemodel->list_youtube();
		$this->data['next_match'] = $this->challengehomemodel->next_match();
		$this->load->view('home_layout/home_index_layout',$this->data);
    }
	public function getyoutube()
	{
		$file = file_get_contents('http://gdata.youtube.com/feeds/api/users/SaigonFutsal/uploads?v=2&alt=jsonc');
		$file = json_decode($file);
		$data_save = array();
		foreach($file->data->items as $data_youtube)
		{
			$detail_youtube = $this->youtubehomemodel->detail_youtube($data_youtube->id);
			if(empty($detail_youtube))
			{
				$data_save = array('code_youtube'=>$data_youtube->id,'title_youtube'=>$data_youtube->title);
				$this->youtubehomemodel->insert_youtube($data_save);
			}
			
		}
	}
    public function check_email() {
        $this->load->model('users');
        $email = $this->input->post('email');
        $result = $this->users->get_user_by_email($email);
        if (empty($result)) {
            $data = array('error' => 1);
        } else {
            $data = array('error' => 0);
        }
        echo json_encode($data);
    }
    function _show_message($message) {
        $this->session->set_flashdata('message', $message);
        redirect('/');
    }
    public function about()
    {
		$this->data['main_content'] = 'about_view';
		$this->data['header']['title'] = 'Giới thiệu về CLB | Futsal United Saigon';
		$this->data['about'] = $this->abouthomemodel->get_about(1);
       $this->load->view('home_layout/home_about_layout',$this->data);		
    }
    public function tai_tro()
    {
		$this->data['header']['title'] = 'Nhà tài trợ | Futsal United Saigon';
		$this->data['main_content'] = 'about_view';
		$this->data['about'][0]['content_about'] = '';
       $this->load->view('home_layout/home_about_layout',$this->data);		
    }
	public function list_clip()
	{
		
		$this->load->model('youtubehomemodel');
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(4);
		$config['per_page'] = 12;
		$config['total_rows'] = $this->youtubehomemodel->count_clip_youtube();
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->youtubehomemodel->list_clip_youtube($config['per_page'], $page1);
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;		
		$this->data['header']['title'] = "Clip | Futsal United Saigon";
		$this->data['main_content'] = 'list_video_view';
		$this->load->view('home_layout/home_media_layout',$this->data);	
	}
	public function image()
	{
		$this->load->model('imagehomemodel');
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(4);
		$config['per_page'] = 12;
		$config['total_rows'] = $this->imagehomemodel->count_clip_image();
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->imagehomemodel->list_clip_image($config['per_page'], $page1);
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->data['main_content'] = 'list_picture_view';
		$this->data['header']['title'] = "Hình ảnh | Futsal United Saigon";
		$this->load->view('home_layout/home_media_layout',$this->data);		
	}
	
	function _send_email($type, $to, $email, &$data, $title) {
        /*$this->load->library('email');*/
       // $this->load->library('maillinux');
        $this->load->library('mailer');
        $from = MAIL_ADMIN;
        $subject = $title;
        $messsage = $this->load->view('home/email/' . $type . '-html', $data, TRUE);
        //$this->maillinux->SendMail('tibimart@nhucauvieclam.net', $email, $subject, $messsage);
		$this->mailer->sendmail($email,$email,$subject,$messsage);
    }
}
?>