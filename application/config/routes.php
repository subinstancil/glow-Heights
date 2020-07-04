<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login/';
$route['login'] = 'login/index';
$route['college'] = 'college/index';
$route['pages'] = 'pages/index';
$route['(:any)'] = 'pages/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
