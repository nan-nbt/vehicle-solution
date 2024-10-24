<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternative extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alternative_model');
		$this->load->library('form_validation', 'session');
	}

	// function index
	public function index()
	{
		$this->load->view('users/basic_data/alternative/management');
	}

	// function view list alternative
	public function viewAlternative()
	{
		$this->load->view('users/topsis/alternative/list');
	}

	// list alternative
	public function listAlternative()
	{
		$response = $this->Alternative_model->getAll();
		echo json_encode($response);
	}

	// add alternative
	public function add()
	{
		$aid = $this->input->post('aid', true);
		$name = $this->input->post('name', true);
		$desc = $this->input->post('desc', true);
		$url = $this->input->post('url', true);

		$validation = $this->form_validation->set_rules($this->Alternative_model->rules());

		if ($validation->run()) {

			$data = array(
				'aid' => $aid,
				'name' => $name,
				'description' => $desc,
				'url' => $url
			);

			$this->Alternative_model->save($data);

			$response = true;
			echo json_encode($response);
		} else {
			$response = 'save failed!';
			echo json_encode($response);
		}
	}

	// edit alternative
	public function edit()
	{
		$aid = $this->input->post('aid', true);
		$name = $this->input->post('name', true);
		$desc = $this->input->post('desc', true);
		$url = $this->input->post('url', true);

		$validation = $this->form_validation->set_rules($this->Alternative_model->rules());

		if ($validation->run()) {

			$data = array(
				'aid' => $aid,
				'name' => $name,
				'description' => $desc,
				'url' => $url
			);

			$this->Alternative_model->update($data);

			$response = true;
			echo json_encode($response);
		} else {
			$response = 'update failed!';
			echo json_encode($response);
		}
	}

	// delete alternative
	public function delete($aid = null)
	{
		if (!isset($aid)) {
			$response = 'alternative id not found!';
			echo json_encode($response);
		} else {
			$data = $this->Alternative_model->delete($aid);
			echo json_encode($data);
		}
	}
}
