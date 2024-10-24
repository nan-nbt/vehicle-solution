<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topsis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alternative_model');
        $this->load->model('Criteria_model');
        $this->load->model('Mapping_model');
        $this->load->model('Weight_model');
        $this->load->model('Users_model');
        $this->load->library('form_validation', 'session');
    }

    // index
    public function index()
    {
        $this->load->view('users/topsis/analysis/process');
    }
}
