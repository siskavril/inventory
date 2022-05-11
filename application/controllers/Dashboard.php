<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function index(){
		$this->load->view('header_view');
		$this->load->view('dashboard_view');
		$this->load->view('footer_view');
	}
	
}
