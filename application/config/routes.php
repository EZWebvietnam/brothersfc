<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['trang-chu'] = "home/home/index";
$route['tin-tuc']="home/news/list_new";
$route['tin-tuc/page/(:any)']="home/news/list_new";
$route['c/(:any)-(:any)']="home/news/list_post_by_id/$1";
$route['c/(:any)-(:any)/page/(:any)']="home/news/list_post_by_id/$1";
$route['post/(:any)-(:any)']="home/news/detail_new/$1";
$route['dang-ky-fb']="home/teams/register_member";
$route['doi-bong/danh-sach']="home/teams/list_mem";
$route['doi-bong/noi-quy']="home/teams/noi_quy";
$route['doi-bong/lich-thi-dau'] = 'home/teams/lich_thi_dau';
$route['doi-bong/ket-qua-bau-chon'] = 'home/teams/result_vote';
$route['doi-bong/cau-thu-xuat-sac-nhat-thang'] = "home/teams/binh_chon";
$route['doi-bong/ket-qua-thi-dau'] = "home/teams/result_team";
$route['doi-bong/ket-qua-thi-dau/page/(:any)'] = "home/teams/result_team";
$route['doi-bong/gioi-thieu'] = "home/home/about";
$route['doi-bong/nha-tai-tro'] = "home/home/tai_tro";
$route['doi-bong/cap-keo'] = "home/teams/cap_keo";
$route['prepare-match/(:any)-(:any)'] = "home/teams/prepare_match/$1";
$route['media/clip'] = "home/home/list_clip";
$route['media/clip/page/(:any)'] = "home/home/list_clip";
$route['media/hinh-anh']="home/home/image";
$route['logout']="home/teams/logout";
$route['quan-tri'] = "admin/login/index";
$route['quan-tri-vien'] = "admin/accountadmin/index";
$route['quen-mat-khau'] = "admin/login/reset_pass";
$route['active-pass/(:any)/(:any)'] = "admin/login/active_pass";
/* End of file routes.php */
/* Location: ./application/config/routes.php */