<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // index
    public function index()
    {
        $this->load->view('users/about/version');
    }

    // about us
    public function about()
    {
        $this->load->view('users/about/about_us');
    }
}
