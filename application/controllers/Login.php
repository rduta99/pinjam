<?php

class Login extends MY_Controller {
  function __construct() {
    parent::__construct();
    $this->data['username'] = $this->session->userdata('username');
    $this->data['id_role']  = $this->session->userdata('id_role');
    if (isset($this->data['username'], $this->data['id_role'])) {
      switch ($this->data['id_role']) {
        case 1:
          redirect('superadmin');
          break;
        case 2:
          redirect('admin');
          break;
        case 3:
        	redirect('user');
        	break;
      }
      exit;
    }
    $this->load->model('Login_m');
  }

  public function index() {
    if ($this->POST('login')) {
      $required = ['username', 'password'];
      if (!$this->Login_m->required_input($required)) {
        $this->flashmsg('Data harus diisi secara lengkap', 'warning');
        redirect('login');
        exit;
      }
      $this->data = [
        'username' => $this->POST('username'),
        'password' => md5($this->POST('password'))
      ];
      if ($this->Login_m->cek_login($this->data)) {
        redirect('login');
      } else {
        $this->flashmsg('<i class="fa fa-warning"></i> Username atau password salah!', 'danger');
        redirect('login');
      }
      exit;
    }
    $this->data['title'] = 'Login | ';
    $this->data['content'] = 'login';
    $this->load->view('user/template', $this->data);
  }


}

?>