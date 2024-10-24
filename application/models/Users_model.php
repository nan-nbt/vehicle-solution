<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

	// function rules for validation
	public function rules()
	{
		return [
			['field' => 'fullname', 'label' => 'Full Name', 'rules' => 'required'],
			['field' => 'email', 'label' => 'Email', 'rules' => 'required'],
			['field' => 'password', 'label' => 'Password', 'rules' => 'required']
		];
	}

	public function getAll()
	{
		# code...
	}

	// function getByEmail data on the table
	public function getByEmail($email)
	{
		return $this->db->get_where('users', ['email' => $email])->result();
	}

	// function register data on the table
	public function save($data)
	{
		return $this->db->insert('users', $data);
	}
}
