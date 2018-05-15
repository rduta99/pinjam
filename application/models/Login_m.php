<?php

class Login_m extends MY_Model{
	public function __construct(){
		parent::__construct();
		$this->data['table_name'] 	= 'users';
    	$this->data['primary_key']	= 'username';
	}
	
	public function cek_login($data) {
		$user_data = $this->get_row($data);
		if(isset($user_data)){
			$user_session = [
				'username'	=> $user_data->username, 
				'id_role'	=> $user_data->id_role 
			];
			$this->session->set_userdata($user_session);
			return true;
		}
		return false;
	}
}