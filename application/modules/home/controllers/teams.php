<?php
class Teams extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		parent::list_cate();	
		$this->load->library('session');
		$this->load->library('tank_auth');
        $this->lang->load('tank_auth');
		$this->load->model('challengehomemodel');
		$this->load->model('newshomemodel');
		$this->load->model('abouthomemodel');
		$this->data['next_match'] = $this->challengehomemodel->next_match();
		$this->data['doc_nhieu'] = $this->newshomemodel->get_doc_nhieu();
	}	
	public function register_member()
	{
		if($this->input->post())
		{
			$token = $this->input->post('access_token');
			$full_name = $this->input->post('full_name');
			$dob = $this->input->post('dob');
			$id_login = $this->input->post('id_login');
			$phone = $this->input->post('phone');
			if($this->input->post('username')!='')
			{
				$email =  $this->input->post('username');
				$username = $this->input->post('username');
				$username = explode('@',$username);
				$username = $username[0];	
			}
			else
			{
				$email =  $this->input->post('username_1');
				$username = $this->input->post('username_1');
				$username = explode('@',$username);
				$username = $username[0];
			}
			
			$cmnd = $this->input->post('cmnd');
			$tinh = $this->input->post('tinh');
			$address = $this->input->post('address');
			$email_activation = $this->config->item('email_activation', 'tank_auth');
			$password_1 = rand_string(6);
			$password = $this->tank_auth->hash_password($password_1);
			$vi_tri = $this->input->post('vi_tri');
			if($this->input->post('case_') == 0)
			{
				if($this->tank_auth->login_by_login_id($id_login)==false)
				{
					$data_create = $this->tank_auth->create_user2($username,$email,$password,$full_name,$phone,$dob,$address,'2',$email_activation,'0',$tinh,$cmnd,$token,$id_login,$vi_tri);
					if(!is_null($data_create))
					{
						//$this->load->library('messagefb');
						//$message = "$full_name vừa gia nhập Futsal United Saigon tại website ".base_url();
						//$link =base_url().'doi-bong-danh-sach';
						//$this->messagefb->post_message($id_login,$message,$link,$token);
						$this->tank_auth->login_by_login_id($id_login);
						if(isset($_SESSION['url_current']))
						{	
							$link = $_SESSION['url_current'];
							unset($_SESSION['url_current']);
							redirect($link);
						}
						else
						{
							redirect('..'.ROT_DIR);	
						}
					}
					
				}
				else
				{
					if(isset($_SESSION['url_current']))
						{	
							$link = $_SESSION['url_current'];
							unset($_SESSION['url_current']);
							redirect($link);
						}
						else
						{
							redirect('..'.ROT_DIR);	
						}
				}
			}
			else
			{
				if($this->tank_auth->login_by_login_id($id_login)==true)
				{
					//$this->load->library('messagefb');
					//$this->messagefb->post_message($id_login,$message,$link,$token);
					if(isset($_SESSION['url_current']))
						{	
							$link = $_SESSION['url_current'];
							unset($_SESSION['url_current']);
							redirect($link);
						}
						else
						{
							redirect('..'.ROT_DIR);	
						}
				}
				else
				{
					$_SESSION['item'] = 'Hệ thống xác nhận bạn chưa đăng ký làm thành viên đội bóng, hoặc tài khoản của bạn chưa được xác nhận. Vui lòng click đăng ký để Đăng ký làm thành viên đội bóng !';
					redirect('..'.ROT_DIR.'dang-ky-fb');
				}
			}
			
			
		}
		else
		{
			$this->load->helper('url_helper');
			$this->load->library('oauth2/OAuth2');
			$this->load->config('oauth2', TRUE);
			$provider_name = 'facebook';
			$provider      = $this->oauth2->provider($provider_name, array(
					'id'    => $this->config->item($provider_name.'_id', 'oauth2'),
					'secret'=> $this->config->item($provider_name.'_secret', 'oauth2'),
				));


			if( ! $this->input->get('code')){
				$provider->authorize();
			}
			else
			{
				try
				{
					$token = $provider->access($this->input->get('code'));
					$this->data['noi_quy'] = $this->abouthomemodel->get_about(2);
					$this->data['token'] = $token->access_token;
					$this->data['header']['title'] = 'Đăng ký thành viên | Futsal United Saigon';
					$this->load->view('home_layout/home_member_register_layout',$this->data);
					
				}
				catch(OAuth2_Exception $e){
					show_error('That didnt work: '.$e);
				}

			}	
		}
	}
	public function list_mem()
	{
		$this->load->model('users');
		$this->data['main_content'] = 'list_mem_of_team';
		$list_user_1 = $this->users->get_mem_team(1);
		$list_user_2 = $this->users->get_mem_team(2);
		$list_user_3 = $this->users->get_mem_team(3);
		$this->data['list_user_1'] = $list_user_1;
		$this->data['list_user_2'] = $list_user_2;
		$this->data['list_user_3'] = $list_user_3;
		$this->data['header']['title'] = 'Danh sách thành viên đội bóng | Futsal United Saigon';
		$this->load->view('home_layout/home_list_team_layout',$this->data);
	}
	public function logout()
	{
		$this->tank_auth->logout();
		$link = $_SERVER['HTTP_REFERER'];
		redirect($link);	
	}
	public function noi_quy()
	{
		$this->data['new_detail'] = $this->abouthomemodel->get_about(2);
		$this->data['main_content'] = 'noi_quy';
		$this->data['active']= 0;
		$this->data['header']['title'] = 'Nội quy và các quy định của đội bóng | Futsal United Saigon';
		$this->data['header']['description'] = 'Nội quy và các quy định của đội bóng | Futsal United Saigon';
		$this->load->view('home_layout/home_new_detail_layout',$this->data);
	}
	public function lich_thi_dau()
	{
		$m = date('m');
		$lastmonth_start = date('Y-m-d',mktime(1,1,1,$m,1,date('Y'))); 
		$lastmonth_end = date('Y-m-d',mktime(1,1,1,++$m,0,date('Y')));
		$this->data['list'] = $this->challengehomemodel->get_challenge_month($lastmonth_start,$lastmonth_end);
		$this->data['main_content'] = 'lich_thi_dau';
		$this->data['header']['title'] = 'Lịch thi đấu | Futsal United Saigon';
		$this->load->view('home_layout/home_list_team_layout',$this->data);
	}
	public function binh_chon()
	{
		$this->load->model('votehomemodel');
		if(!$this->tank_auth->is_logged_in())
		{
			$_SESSION['url_current'] = full_url_($_SERVER);
			redirect('..'.ROT_DIR.'dang-ky-fb');	
		}
		$id_user = $this->session->userdata('user_id');
		if($this->input->post())
		{
			
			$m = date('m');
			$lastmonth_start = date('Y-m-d',mktime(1,1,1,$m,1,date('Y'))); 
			$lastmonth_end = date('Y-m-d',mktime(1,1,1,++$m,0,date('Y')));
			$id_vote = $this->input->post('radio');
			$detail_vote = $this->votehomemodel->get_vote($lastmonth_start,$lastmonth_end,$id_user);
			$time = date('Y-m-d H:i:s');
			if(empty($detail_vote))
			{
				$data_save = array('id_user'=>$id_user,'id_vote'=>$id_vote,'time'=>$time);
				$id = $this->votehomemodel->vote_insert($data_save);
				if($id>0)
				{
					redirect(full_url_($_SERVER));	
				}
			}
			else
			{
				$this->load->model('users');
				$this->data['list_mem'] = $this->users->get_mem_all($id_user);
				$this->data['main_content'] = 'binh_chon_cau_thu';
				$this->load->view('home_layout/home_list_team_layout',$this->data);
			}
		}
		else
		{
			$this->data['header']['title'] = 'Bình chọn cầu thủ xuất sắc | Futsal United Saigon';
			$this->load->model('users');
			$this->data['list_mem'] = $this->users->get_mem_all($id_user);
			$this->data['main_content'] = 'binh_chon_cau_thu';
			$this->load->view('home_layout/home_list_team_layout',$this->data);
		}
		
	}
	public function result_vote()
	{
		$this->load->model('votehomemodel');
		if(!$this->tank_auth->is_logged_in())
		{
			$_SESSION['url_current'] = full_url_($_SERVER);
			redirect('..'.ROT_DIR.'dang-ky-fb');	
		}
		$time = date('Y').'-'.date('m').'-20 00:00:00';
		$this->load->model('users');
		/*if(strtotime('now')<strtotime($time))
		{
			echo 'Bạn không thể xem kết quả khi bình chọn chưa kết thúc !';
		}
		else
		{*/
			$m = date('m');
			$lastmonth_start = date('Y-m-d',mktime(1,1,1,$m,1,date('Y'))); 
			$lastmonth_end = date('Y-m-d',mktime(1,1,1,++$m,0,date('Y')));
			$list_user = $this->users->get_mem_all_2();
			
			$array_result = array();
			foreach($list_user as $user)
			{
				$list_vote_result = $this->votehomemodel->get_vote_all($lastmonth_start,$lastmonth_end,$user['id']);
				$array_result[]=array('id_user'=>$user['id'],'full_name'=>$user['full_name'],'result'=>$list_vote_result[0]['total_result']);
			}
			echo '<meta charset="UTF-8" />';
			echo "Kết quả <br/>";
			foreach($array_result as $value)
			{
				$full_name = $value['full_name'];
				$result = $value['result'];
				echo " $full_name - đạt $result phiếu<br/><br/>";	
			}
		//}
	}
	public function result_team()
	{
		$this->load->model('resulthomemodel');
		$this->load->helper('url');
		$config['uri_segment'] = 5;
		$page = $this->uri->segment(4);
		$config['per_page'] = 12;
		$config['total_rows'] = $this->resulthomemodel->count_result();
		if($page == ''){
			$page = 1;
		}
		$page1 = ($page - 1) * $config['per_page'];
		if(!is_numeric($page)){
			show_404();
			exit;
		}
		$num_pages = ceil($config['total_rows'] / $config['per_page']);
		$array_sv  = $this->resulthomemodel->get_result($config['per_page'], $page1);
		$this->data['total_page'] = $num_pages;
		$this->data['offset'] = $page1;
		$this->data['page'] = $page;
		$this->data['total'] = $config['total_rows'];
		$this->data['list'] = $array_sv;
		$this->data['main_content'] = 'result_view';
		$this->data['header']['title'] = 'Kết quả thi đấu | Futsal United Saigon';
		$this->load->view('home_layout/home_list_team_layout',$this->data);
	}
	public function cap_keo()
	{
		if($this->input->post())
		{
			$team_challenge = $this->input->post('team_challenge');
			$leader_challenge = $this->input->post('leader_challenge');
			$email_leader_challenge = $this->input->post('email_leader_challenge');
			$phone_leader_challenge = $this->input->post('phone_leader_challenge');
			$courtyard_challenge = $this->input->post('courtyard_challenge');
			$lat = $this->input->post('lat');
			$long = $this->input->post('lng');
			$address = $this->input->post('address');
			$time = $this->input->post('time');
			$time_= $this->input->post('time_');
			if (strpos($time_,'pm') !== false) {
			    $time_ = explode('pm',$time_);
				if(isset($time_[0]))
				{
					$time_1 = explode(':',$time_[0]);
					$time_save = $time_1[0]+12;
					$time_save = $time_save.':'.$time_1[1];
				}
			}
			else
			{
				$time_save = $time_;	
			}
			$time_save = $time.' '.$time_;
			$keo= $this->input->post('keo');
			$data_save = array('team_challenge'=>$team_challenge,'leader_challenge'=>$leader_challenge,'email_leader_challenge'=>$email_leader_challenge,'phone_leader_challenge'=>$phone_leader_challenge,'courtyard_challenge'=>$courtyard_challenge,'keo'=>$keo,'time'=>$time_save,'lat'=>$lat,'long'=>$lng,'address'=>$address);
			$id = $this->challengehomemodel->insert_challenge($data_save);
			if($id>0)
			{
				$this->load->library('esms');
				$message = "FUST nhận được kèo thi đấu từ $team_challenge tại website FutsalUnitedSaigon.com vui lòng login để xác nhận !";
				$message = removesign($message);
				$this->esms->sendsms('01667039939',$message);
				redirect('..'.ROT_DIR);	
			}
		}
		else
		{
			$this->data['header']['title'] = 'Cáp kèo thi đấu giao hữu với FUST | Futsal United Saigon';
			$this->data['main_content'] = 'cap_keo';
			$this->load->view('home_layout/home_list_team_layout',$this->data);
		}	
	}
	public function prepare_match($id = null)
	{
		$id = explode('-',$id);
		$id = $id[0];
		if(empty($id))
		{
			show_404();exit;	
		}
		if(!is_numeric($id))
		{
			show_404();
			exit;	
		}
		
		$this->data['detail_next_match'] = $this->challengehomemodel->detail($id);
		$this->data['header']['title'] = 'FUST vs '.$this->data['detail_next_match'][0]['team_challenge'].' | Futsal United Saigon';
		$this->data['main_content'] = 'next_match_view';
		$this->load->view('home_layout/home_list_team_layout',$this->data);
	}
}
?>