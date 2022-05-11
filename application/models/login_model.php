<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	
	function get_login(){
    $result = $this->db->get('user');
    return $result;
	}
  
}