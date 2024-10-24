<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Weight extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Weight_model');
		$this->load->library('form_validation', 'session');
	}

	// index
	public function index()
	{
		# code..
	}

	// list range value (weight)
	public function listWeight()
	{
		$response = $this->Weight_model->getAll();
		echo json_encode($response);
	}
}
