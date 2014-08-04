<?php
class Challengeadmin extends MY_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
		$this->load->model('challengemodel');
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
        if($this->session->userdata('role')!=1)
        {
            show_404();
            exit;
        }
    }
	public function list_challenge()
	{
		$this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->challengemodel->count_challenge();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->challengemodel->list_challenge($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_challenge'] = $array_sv;
        $this->load->view('challenge/ajax_admin_get_challenge', $this->data);
	}
	public function view($id)
	{
		$this->data['challenge_detail'] = $this->challengemodel->view($id);
		$this->load->view('challenge/ajax_admin_view_challenge', $this->data);
	}
	public function confirm_keo()
	{
		$id = $this->input->post('id');
		$keo_detail = $this->challengemodel->view($id);
		$keo = 1 - $keo_detail[0]['confirm'];
		$san = $keo_detail[0]['courtyard_challenge'];
		$time = $keo_detail[0]['time'];
		$name = $keo_detail[0]['team_challenge'];
		$data_save = array('confirm'=>$keo);
		$this->challengemodel->update($id,$data_save);
		if($keo == 1)
		{
			$message ="Futsal United xac nhan keo thanh cong. FUST se co tran dau voi $name vao luc $time tai san $san. Cam on ban da gui loi moi giao huu toi chung toi";	
		}
		else
		{
			$message ="Tran dau giua FUST va $name vao luc $time tai san $san da bi huy. Cam on ban da gui loi moi giao huu toi chung toi";	
		}
		$message = removesign($message);
		$this->load->library('esms');
		$this->esms->sendsms($keo_detail[0]['phone_leader_challenge'],$message);
	}
	public function delete($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        $detail = $this->challengemodel->view($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        
            $this->challengemodel->delete($id);
       
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
    public function deletes()
    {
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
                $this->challengemodel->delete($v);
        }
        $array = array('error' => 0, 'msg' => "Xóa thành công");
        echo json_encode($array);
    }
	public function score($id)
	{
		if($this->input->post())
		{
			$team_home = $this->input->post('team_home');
			$team_visit = $this->input->post('team_visit');
			$data_save = array('id_challenge'=>$id,'team_home'=>$team_home,'team_visit'=>$team_visit);
			$id = $this->challengemodel->insert_result($data_save);
			if($id>0)
			{
				 $array = array('error' => 0, 'msg' => "Thêm thành cống");
        		
			}
			else
			{
				 $array = array('error' => 1, 'msg' => "Thêm thất bại");
       			
			}
			 echo json_encode($array);
		}
		else
		{
			$this->data['challenge_detail'] = $this->challengemodel->view($id);
			$this->load->view('challenge/ajax_admin_score', $this->data);
		}
	}
}
?>