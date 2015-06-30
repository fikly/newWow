<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$route['default_controller'] = "frontend/main/index";
$route['404_override'] = "home/c_home/e404";
$route['contact'] = "frontend/contact";


$route['login'] = "admin/user/login";
$route['user_signin'] = "admin/user/signin";
$route['user_view/(:num)'] = "admin/user/view/$1";
$route['user_changepass'] = "admin/user/change_password";
$route['user_forgot_pass'] = "admin/user/forgot_password";
$route['admin/list_view'] = "admin/user/list_view";
$route['admin/create'] = "admin/user/create";
$route['logout'] = "admin/user/logout";
$route['welcome'] = "admin/Welcome";
$route['main'] = "frontend/main/page";
$route['content/(:num)'] = "frontend/main/content/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */