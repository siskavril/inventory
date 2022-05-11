<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
    parent::__construct();
    $this->load->model('login_model');
	}
	
	function index(){
		$data['user'] = $this->login_model->get_login();
		$this->load->view('login_view', $data);
	}
	
}
