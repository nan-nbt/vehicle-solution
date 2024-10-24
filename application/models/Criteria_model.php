<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Criteria_model extends CI_Model
{

	// rules for validation
	public function rules()
	{
		return [
			['field' => 'cid', 'label' => 'Criteria ID', 'rules' => 'required'],
			['field' => 'name', 'label' => 'Criteria Name', 'rules' => 'required'],
			['field' => 'desc', 'label' => 'Description', 'rules' => 'required'],
			['field' => 'impact', 'label' => 'Cost/Benefit', 'rules' => 'required'],
			['field' => 'weight', 'label' => 'Weight', 'rules' => 'required']
		];
	}

	// get all data criteria
	public function getAll()
	{
		$sql = "SELECT * FROM criteria ORDER BY cast(substr(cid,2,3) as decimal)";
		return $this->db->query($sql)->result();
	}

	// save criteria
	public function save($data)
	{
		return $this->db->insert('criteria', $data);
	}

	// update criteria
	public function update($data)
	{
		return $this->db->update('criteria', $data, array('cid' => $data['cid']));
	}

	// delete criteria
	public function delete($cid)
	{
		return $this->db->delete('criteria', array('cid' => $cid));
	}
}
