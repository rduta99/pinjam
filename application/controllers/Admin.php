<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->data['username'] = $this->session->userdata('username');
		$this->data['id_role'] = $this->session->userdata('id_role');
		if (!isset($this->data['username']) || $this->data['id_role'] != 2) {
			$this->session->unset_userdata('username');
      		$this->session->unset_userdata('id_role');
      		$this->flashmsg('Anda harus login terlebih dahulu!', 'warning');
      		redirect('login');
		}
		$this->load->model('Admin_m');
	}
}


?>