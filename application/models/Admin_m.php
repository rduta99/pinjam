<?php

class Admin_m extends MY_Model {
	function __construct() {
		parent::__construct();
		$this->data['primary_key'] = '';
		$this->data['table'] = '';
	}
}

?>