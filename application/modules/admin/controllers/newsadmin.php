<?php

class Newsadmin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('newsmodel');
        $this->load->helper(array('form','url'));
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->library('form_validation');
        if(!$this->tank_auth->is_login_admin(TRUE))
        {
            redirect('/quan-tri');
        }
    }

    public function list_new() {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        if ($this->input->post('page_no')) {
            $page = $this->input->post('page_no');
        } else {
            $page = 1;
        }
        $config['per_page'] = 10;
        $config['total_rows'] = $this->newsmodel->count_new();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        $num_pages = ceil($config['total_rows'] / $config['per_page']);
        $array_sv = $this->newsmodel->list_new($config['per_page'], $page1);
        $this->data['total_page'] = $num_pages;
        $this->data['offset'] = $page1;
        $this->data['page'] = $page;
        $this->data['total'] = $config['total_rows'];
        $this->data['list_new'] = $array_sv;
        $this->load->view('new/ajax_admin_get_new', $this->data);
    }

    public function add() {
        if ($this->input->post()) {
            $data = array();
            $data_save = array();
            $data_save = array(
                'title_new' => $this->input->post('title'),
                'content_new' => stripslashes($this->input->post('content')),
                'image_new' => $this->input->post('file'),
                'create_date' => strtotime('now'),
				'id_cate'=>$this->input->post('category'),
				'id_user'=>$this->session->userdata('user_id'),
				'des'=>$this->input->post('desc')
            );
		
			if($this->input->post('radio_1') == 1)
			{
				$list_match = $this->newsmodel->list_match_review($this->input->post('match_review'));
				foreach($list_match as $v)
				{
					$data_review = array('match_review'=>0);
					$this->newsmodel->update($v['id_new'],$data_review);	
				}
				$data_save['match_review'] = $this->input->post('match_review');
			}
			if($this->input->post('radio_3') == 1)
			{
				
				$data_save['noi_bat'] = 1;
			}
            $id = $this->newsmodel->insert($data_save);
            if ($id > 0) {
                $data = array('error' => 0, 'msg' => 'Thêm thành công');
            } else {
                $data = array('error' => 1, 'msg' => 'Thêm thất bại');
            }
            $data_save = array();
            echo json_encode($data);
        } else {
            $this->load->view('new/ajax_admin_add_new');
        }
    }

    public function edit($id = null) {
        if (empty($id) || !is_numeric($id)) {
            show_404();
            exit;
        }
        $this->data['detail'] = $this->newsmodel->detail($id);
        if (empty($this->data['detail'])) {
            show_404();
            exit;
        }
        if ($this->input->post()) {
            $file = $this->input->post('file');
            $title = $this->input->post('title');
            $content = stripslashes($this->input->post('editor2'));
            $data_update = array();
            if ($file != '') {
                if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new'])) {
                    unlink(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new']);
                }
                $data_update = array(
                    'title_new' => $title,
                    'content_new' => $content,
                    'image_new' => $file,
					'id_cate'=>$this->input->post('category'),
					'id_user'=>$this->session->userdata('user_id'),
					'des'=>$this->input->post('desc')
                );
            } else {
                $data_update = array(
                    'title_new' => $title,
                    'content_new' => $content,
					'id_cate'=>$this->input->post('category'),
					'id_user'=>$this->session->userdata('user_id'),
					'des'=>$this->input->post('desc')
                );
            }
			if($this->input->post('radio_1')==1)
			{
				$list_match = $this->newsmodel->list_match_review($this->input->post('match_review'));
				foreach($list_match as $v)
				{
					$data_review = array('match_review'=>0);
					$this->newsmodel->update($v['id_new'],$data_review);	
				}
				$data_update['match_review'] = $this->input->post('match_review');
			}
			if($this->input->post('radio_3') == 1)
			{
				$data_update['noi_bat'] = 1;
			}
            $this->newsmodel->update($id, $data_update);
            $data_update = array();
            $data = array('error' => 0, 'msg' => 'Update thành công');
            echo json_encode($data);
        } else {
            $this->load->view('new/ajax_admin_edit_new', $this->data);
        }
    }

    public function delete($id) {
        if (empty($id) || !is_numeric($id)) {
            show_404();
            exit;
        }
        $this->data['detail'] = $this->newsmodel->detail($id);
        if (empty($this->data['detail'])) {
            show_404();
            exit;
        }
        $this->newsmodel->delete($id);
        $data = array('error' => 0, 'msg' => 'Xóa thành công');
        if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new'])) {
            unlink(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $this->data['detail'][0]['image_new']);
        }
        echo json_encode($data);
    }

    public function deletes() {
        $array = $this->input->post('ar_id');
        foreach ($array as $k => $v) {
            $detail = $this->newsmodel->detail($v);
            if(!empty($detail))
            {
                if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $detail[0]['image_new']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $detail[0]['image_new'])) {
                    unlink(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $detail[0]['image_new']);
                }
                $this->newsmodel->delete($v);
            }
        }
        $data = array('error' => 0, 'msg' => 'Xóa thành công');
        echo json_encode($data);
    }
	public function push_to_page()
	{
		if($this->input->post())
		{
			$id = $this->input->post('id_new');
			$detail = $this->newsmodel->detail($id);
			
			
			
			if (file_exists(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $detail[0]['image_new']) && is_file(PATH_FOLDER . ROT_DIR . 'file/uploads/new/' . $detail[0]['image_new'])) {
					$picture = base_url().'file/uploads/new/'.$detail[0]['image_new'];
				}
				else
				{
					$picture = base_url().'file/uploads/no_image.gif';
				}
				$link = base_url().'post/'.$detail[0]['id_new'].'-'.mb_strtolower(url_title(removesign($detail[0]['title_new'])));
				$message = sub_string($detail[0]['des'],500)."... >> Đọc tiếp tại $link";
			$this->load->library('messagefb');
			$this->messagefb->push_fanpage($message,$picture,$link,'CAAG8bSDPIpIBAN1iEgIi14wvpQGssxqqOK2o9MXxKnXZCekxsIWCQW33ziVfWN4YsShvHCTwtg26PDc2THcRANMWVeXZAVtA4J0mQe02I01wZAVrPpnqCMZAOswOFUNiefjaCHCtAFIyHly44CvXbWEl67qf1R6e6nKCuL3JNd8uaWmPuzYTgvch6P5Q6q4ZD');
		}
		else
		{
			$this->data['list_new'] = $this->newsmodel->list_new_fb();
			$this->load->view('new/push_to_fanpage',$this->data);
		}
		
	}

}
?>