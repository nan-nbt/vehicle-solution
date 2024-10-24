<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mapping_model');
		$this->load->library('form_validation', 'session');
	}

	// function index
	public function index()
	{
		$this->load->view('users/basic_data/mapping/management');
	}

	// list mapping by id
	public function listMap()
	{
		$response = $this->Mapping_model->getAll();
		echo json_encode($response);
	}

	// list mapping by id
	public function listMapById()
	{
		$mid = $this->input->post('mid', true);

		$response = $this->Mapping_model->getMapById($mid);
		echo json_encode($response);
	}

	// list mapping by alternative
	public function listMapByAlt()
	{
		$array_aid = $this->input->post('array_aid', true);

		$response = $this->Mapping_model->getMapByAlt($array_aid);
		echo json_encode($response);
	}

	// add mapping
	public function add()
	{
		$mid = $this->input->post('mid', true);
		$aid = $this->input->post('aid', true);
		$cid = $this->input->post('cid', true);
		$weight = $this->input->post('weight', true);

		$validation = $this->form_validation->set_rules($this->Mapping_model->rules());

		if ($validation->run()) {

			$data = array(
				'mid' => $mid,
				'aid' => $aid,
				'cid' => $cid,
				'weight' => $weight
			);

			$check_map = $this->Mapping_model->getMapByAltCri($aid, $cid);

			if (count($check_map) > 0) {
				$response = 'duplicated! ' . $aid . $cid . ' is already mapping!';
				echo json_encode($response);
			} else {
				$this->Mapping_model->save($data);

				$response = true;
				echo json_encode($response);
			}
		} else {
			$response = 'save failed!';
			echo json_encode($response);
		}
	}

	// edit mapping
	public function edit()
	{
		$mid = $this->input->post('mid', true);
		$aid = $this->input->post('aid', true);
		$cid = $this->input->post('cid', true);
		$weight = $this->input->post('weight', true);

		$validation = $this->form_validation->set_rules($this->Mapping_model->rules());

		if ($validation->run()) {

			$data = array(
				'mid' => $mid,
				'aid' => $aid,
				'cid' => $cid,
				'weight' => $weight
			);

			$check_map = $this->Mapping_model->getMapByAltCri($aid, $cid);

			if (count($check_map) > 0 && $check_map[0]->weight == $weight) {
				$response = 'duplicated! ' . $aid . $cid . ' is already mapping!';
				echo json_encode($response);
			} else {
				$this->Mapping_model->update($data);

				$response = true;
				echo json_encode($response);
			}
		} else {
			$response = 'update failed!';
			echo json_encode($response);
		}
	}

	// delete mapping
	public function delete($mid = null)
	{
		if (!isset($mid)) {
			$response = 'mapping id not found!';
			echo json_encode($response);
		} else {
			$data = $this->Mapping_model->delete($mid);
			echo json_encode($data);
		}
	}
}
