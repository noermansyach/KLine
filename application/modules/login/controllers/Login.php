<?php

class Login extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'login');
		$this->load->library('form_validation');
		$this->form_validation->CI = &$this;
	}

	public $_data = array(
		'title' => "Login",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$this->load->view('index', $this->_data);
	}

	public function rules()
	{
		return [
			[ 'field' => 'username',
			'label' => 'Username',
			'rules' => 'required|callback_passwordCheck'],
			['field' => 'password',
			'label' => 'Password',
			'rules' => 'required|callback_passwordCheck']
		];
	}

	public function passwordCheck()
	{	
		$username = $this->input->post('username');
    	$password = md5($this->input->post('password'));
    	$cek = $this->login->cek_login(array('username'=>$username, 'password'=>$password))->num_rows();
        if ($cek != 0) {
            return TRUE;
        } else {
        	$this->form_validation->set_message('password_check', 'Incorrect Username or Password');
            return FALSE;
        }
	}

	public function loginAction() 
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$dataUser = $this->login->get_data_user($where);
		$validation = $this->form_validation->set_rules($this->rules());

		if($validation->run($this)) {
			$data_session = array(
					'id' 			=> $dataUser->id_user,
					'nama' 			=> $username,
					'employeeId' 	=> $dataUser->id_employee,
					'department' => $dataUser->id_department,
					'position' 	=> $dataUser->id_position,
					'status' 		=> 'isLogin',
					'company' 		=> $dataUser->id_company,
					'level' 		=> $dataUser->id_level
			);	
			if ($dataUser->id_level == '1') {
				$this->session->set_userdata($data_session);
				redirect('user','refresh');
			} else {
				$this->session->set_userdata($data_session);
				redirect('company','refresh');
			}
		}else{
			// redirect('login','refresh');
			echo "gagal";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
}
