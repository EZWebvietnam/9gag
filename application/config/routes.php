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
$route['dang-ky'] = "home/auth/register";
$route['quy-dinh-su-dung'] = "home/home/quy_dinh";
$route['dieu-khoan-thoa-thuan'] = "home/home/dieu_khoan";
$route['chinh-sach-bao-mat'] = "home/home/chinh_sach";
$route['lien-he'] = "home/home/lien_he";
$route['doanh-nghiep'] = "home/businesshome/load_dn";
$route['doanh-nghiep/(:any)-i(:any)/gioi-thieu'] = "home/businesshome/gioi_thieu_dn/$2";
$route['doanh-nghiep/(:any)-i(:any)/dau-tu-du-an'] = "home/businesshome/du_an/$2";
$route['doanh-nghiep/(:any)-i(:any)/dau-tu-du-an/page/(:any)'] = "home/businesshome/du_an/$2";
$route['doanh-nghiep/tim-kiem/tukhoa_(:any)'] = "home/businesshome/tim_kiem/$1";
$route['doanh-nghiep/tim-kiem/tukhoa_(:any)/page/(:any)'] = "home/businesshome/tim_kiem/$1";
$route['doanh-nghiep/page/(:any)'] = "home/businesshome/load_dn";
//
$route['thanh-vien/loc-tai-san-mac-dinh'] = "home/member/loc_tai_san_mac_dinh";
$route['thanh-vien/loc-tai-san-mac-dinh/page/(:any)'] = "home/member/loc_tai_san_mac_dinh";
$route['thanh-vien/nap-the'] = "home/member/nap_the";
$route['thanh-vien/nang-cap-tai-san/(:any)'] = "home/member/nang_cap/$1";
$route['thanh-vien/log-giao-dich'] = "home/member/list_giao_dich";
$route['thanh-vien/nap-tien'] = "home/member/nap_tien";
$route['thanh-vien/log-giao-dich/page/(:any)'] = "home/member/list_giao_dich";
$route['thanh-vien/tai-san-dang-moi'] = "home/member/tai_san_dang_moi";
$route['thanh-vien/dich-vu-chua-thanh-toan'] = "home/member/chua_thanh_toan";
$route['thanh-vien/thanh-toan-dich-vu/(:any)'] = "home/member/thanh_toan/$1";
$route['thanh-vien/dich-vu-chua-thanh-toan/page/(:any)'] = "home/member/chua_thanh_toan";
$route['thanh-vien/tai-san-dang-hien-thi'] = "home/member/dang_hien_thi";
$route['thanh-vien/tai-san-dang-hien-thi/page/(:any)'] = "home/member/dang_hien_thi";
$route['thanh-vien/tai-san-cho-duyet'] = "home/member/dang_cho_duyet";
$route['thanh-vien/tai-san-cho-duyet/page/(:any)'] = "home/member/dang_cho_duyet";
$route['thanh-vien/tai-san-dang-hien-thi-search?(:any)'] = "home/member/dang_hien_thi_search/$1";
//$route['thanh-vien/tai-san-dang-hien-thi-search/(:any)/(:any)'] = "home/member/dang_hien_thi_search";
$route['thanh-vien/tai-san-luu'] = "home/member/du_property_luu";
$route['thanh-vien/tin-tuc-da-luu'] = "home/member/tin_tuc_luu";
$route['thanh-vien/du-an-da-luu'] = "home/member/project_save";
$route['thanh-vien/du-an-da-luu/page/(:any)'] = "home/member/project_save";
$route['thanh-vien/tai-san-luu/page/(:any)'] = "home/member/du_property_luu";
$route['thanh-vien/tin-tuc-da-luu/page/(:any)'] = "home/member/tin_tuc_luu";
//
$route['xoa-proper/k/(:any)'] = "home/property/delete/$1";
$route['huy-dich-vu/k/(:any)'] = "home/member/huy_dich_vu/$1";
//
$route['thanh-vien/sua-ts-cho-duyet/(:any)'] = "home/member/edit_tai_san_pending/$1";
//
$route['thanh-vien/tai-san-dang-soan'] = "home/member/list_dang_soan";
$route['thanh-vien/tai-san-dang-soan/page/(:any)'] = "home/member/list_dang_soan";
$route['thanh-vien/sua-hs-dang-soan/(:any)'] = "home/member/sua_hs_dang_soan/$1";
//
$route['thanh-vien/tai-san-het-han'] = "home/member/list_het_han";
$route['thanh-vien/tai-san-het-han/page/(:any)'] = "home/member/list_het_han";
$route['thanh-vien/gia-han-dich-vu/(:any)'] = "home/member/gia_han_dich_vu/$1";
//
$route['nha-dep'] = "home/nhadep/list_nhadep";
$route['nha-dep/page/(:any)'] = "home/nhadep/list_nhadep";
$route['nha-dep/(:any)-c(:any)/(:any)-i(:any)'] = "home/nhadep/nhadep_detail/$4";
$route['nha-dep-c/(:any)-c(:any)'] = "home/nhadep/list_nhadep_cate/$2";
//

//
$route['sieu-thi/chinh-chu'] = "home/property/list_cc";
$route['sieu-thi/chinh-chu/page/(:any)'] = "home/property/list_cc_";
$route['xoa-proper-luu/k/(:any)'] = "home/property/delete_save/$1";
$route['xoa-new-luu/k/(:any)'] = "home/news/delete_save/$1";
$route['xoa-project-luu/k/(:any)'] = "home/project/delete_save/$1";
$route['luu-tin/k/(:any)'] = "home/news/save_new/$1";
$route['luu-prj/k/(:any)'] = "home/project/save_project/$1";
$route['luu-dis/k/(:any)'] = "home/discovery/save_disco/$1";
$route['luu-proper/k/(:any)'] = "home/property/save_property/$1";
$route['thanh-vien/edit-tai-khoan'] = "home/member/change_email";
$route['active-mailchange/(:any)/(:any)'] = "home/member/reset_email/$1/$2";
$route['kich-hoat/(:any)/(:any)'] = "home/auth/activate";
$route['quen-mk'] = "home/auth/forgot_password";
$route['dang-nhap'] = "home/auth/login";
$route['logout'] = "home/auth/logout";
$route['active-pass/(:any)/(:any)'] = "home/auth/reset_password";
$route['nha/(:any)-c(:any)/(:any)-h(:any)'] = "home/property/detail/$4";
$route['sieu-thi/(:any)-c(:any)'] = "home/property/list_property/$2";
$route['sieu-thi/(:any)-c(:any)/page/(:any)'] = "home/property/list_property/$2";
$route['q-sieu-thi/(:any)-c(:any)/quan/(:any)-q(:any)'] = "home/property/get_theo_quan/$2/$4";
$route['tp-sieu-thi/(:any)-c(:any)/city/(:any)-ct(:any)'] = "home/property/get_theo_thanh_pho/$2/$4";
$route['sieu-thi/gia/gianho-(:any)-gialon-(:any)'] = "home/property/gia_nho/$1/$2";
$route['sieu-thi'] = "home/property/sieu_thi";
$route['sieu-thi/page/(:any)'] = "home/property/sieu_thi";


$route['sieu-thi/nha-tro'] = "home/property/nha_tro";
$route['sieu-thi/nha-tro/page/(:any)'] = "home/property/nha_tro";
$route['sieu-thi/du-an.(:any).duan'] = "home/property/du_an/$1";
$route['sieu-thi/du-an.(:any).duan/page/(:any)'] = "home/property/du_an/$1";
$route['sieu-thi/tv/(:any)'] = "home/property/get_theo_mem/$1";
$route['tim-kiem?(:any)'] = "home/property/tim_kiem";
$route['tin-tuc'] = "home/news/index";
$route['du-an'] = "home/project/index";
$route['du-an/page/(:any)'] = "home/project/index";
$route['du-an/tu-khoa-(:any)'] = "home/project/key/$1";
$route['du-an-c/(:any)-c(:any)'] = "home/project/list_project/$2";
$route['du-an-c/(:any)-c(:any)/page/(:any)'] = "home/project/list_project/$2";
$route['du-an/(:any)-c(:any)/(:any)-i(:any)'] = "home/project/detail/$4";
$route['du-an/tu-khoa-(:any)/page/(:any)'] = "home/project/key/$1";
$route['kham-pha'] = "home/discovery/index";
$route['kham-pha/(:any)/(:any)-i(:any)'] = "home/discovery/discovery_detail/$3";
$route['kham-pha-c/(:any)-c(:any)'] = "home/discovery/list_disc/$2";
$route['tin-tuc-c/(:any)-c(:any)'] = "home/news/list_new/$2";
$route['tin-tuc/(:any)/(:any)-i(:any)'] = "home/news/news_detail/$3";
$route['404_override'] = '';
$route['admin'] = "admin/index/login";
$route['admin/login'] = "admin/index/login";


/* End of file routes.php */
/* Location: ./application/config/routes.php */