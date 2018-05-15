<?php

$this->load->view('user/title');
if ($content != 'login') {
	$this->load->view('user/navbar');
}
$this->load->view($content);
$this->load->view('user/footer');

?>