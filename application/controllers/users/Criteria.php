<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Criteria extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Criteria_model');
		$this->load->library('form_validation', 'session');
	}

	// index
	public function index()
	{
		$this->load->view('users/basic_data/criteria/management');
	}

	// list criteria
	public function listCriteria()
	{
		$response = $this->Criteria_model->getAll();
		echo json_encode($response);
	}

	// add criteria
	public function add()
	{
		$cid = $this->input->post('cid', true);
		$name = $this->input->post('name', true);
		$desc = $this->input->post('desc', true);
		$impact = $this->input->post('impact', true);
		$weight = $this->input->post('weight', true);

		$validation = $this->form_validation->set_rules($this->Criteria_model->rules());

		if ($validation->run()) {

			$data = array(
				'cid' => $cid,
				'name' => $name,
				'description' => $desc,
				'impact' => $impact,
				'weight' => $weight
			);

			$this->Criteria_model->save($data);

			$response = true;
			echo json_encode($response);
		} else {
			$response = 'save failed!';
			echo json_encode($response);
		}
	}

	// edit criteria
	public function edit()
	{
		$cid = $this->input->post('cid', true);
		$name = $this->input->post('name', true);
		$desc = $this->input->post('desc', true);
		$impact = $this->input->post('impact', true);
		$weight = $this->input->post('weight', true);

		$validation = $this->form_validation->set_rules($this->Criteria_model->rules());

		if ($validation->run()) {

			$data = array(
				'cid' => $cid,
				'name' => $name,
				'description' => $desc,
				'impact' => $impact,
				'weight' => $weight
			);

			$this->Criteria_model->update($data);

			$response = true;
			echo json_encode($response);
		} else {
			$response = 'update failed!';
			echo json_encode($response);
		}
	}

	// delete criteria
	public function delete($cid = null)
	{
		if (!isset($cid)) {
			$response = 'criteria id not found!';
			echo json_encode($response);
		} else {
			$data = $this->Criteria_model->delete($cid);
			echo json_encode($data);
		}
	}
}
