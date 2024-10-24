<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->library('form_validation', 'session');
	}

	// function index
	public function index()
	{
		$this->load->view('users/log/login');
	}

	// login
	public function login()
	{
		$login_email = $this->input->post('login_email', true);
		$login_password = $this->input->post('login_password', true);

		$check_account = $this->Users_model->getByEmail($login_email);

		if (count($check_account) > 0) {
			foreach ($check_account as $account) {
				if ($account->email == $login_email && $account->password == $login_password) {
					$this->session->set_userdata('fullname', $account->fullname);
					$this->session->set_userdata('email', $account->email);
					$this->session->set_userdata('level', $account->level);

					$response = true;
					echo json_encode($response);
				} else {
					$response = 'email and password incorrect!';
					echo json_encode($response);
				}
			}
		} else {
			$response = 'email not registered!';
			echo json_encode($response);
		}
	}

	// register
	public function register()
	{
		$validation = $this->form_validation->set_rules($this->Users_model->rules());

		if ($validation->run()) {

			$fullname = $this->input->post('fullname', true);
			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);
			$level = 2;

			$check_account = $this->Users_model->getByEmail($email);

			if (count($check_account) > 0) {
				$response = 'email is already registerd!';
				echo json_encode($response);
			} else {
				$data = array(
					'fullname' => $fullname,
					'email' => $email,
					'password' => $password,
					'level' => $level
				);

				$this->Users_model->save($data);

				$response = true;
				echo json_encode($response);
			}
		}
	}

	// logout
	public function logout()
	{
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');

		redirect(base_url('users/log'));
	}
}
