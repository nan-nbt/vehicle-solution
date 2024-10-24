<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternative_model extends CI_Model
{

	// rules for validation
	public function rules()
	{
		return [
			['field' => 'aid', 'label' => 'Alternative ID', 'rules' => 'required'],
			['field' => 'name', 'label' => 'Alternative Name', 'rules' => 'required'],
			['field' => 'desc', 'label' => 'Description', 'rules' => 'required'],
			['field' => 'url', 'label' => 'Url Official Web', 'rules' => 'required']
		];
	}

	// get all data alternative
	public function getAll()
	{
		$sql = "SELECT * FROM alternative ORDER BY cast(substr(aid,2,3) as decimal)";
		return $this->db->query($sql)->result();
	}

	// function save
	public function save($data)
	{
		return $this->db->insert('alternative', $data);
	}

	// function update
	public function update($data)
	{
		return $this->db->update('alternative', $data, array('aid' => $data['aid']));
	}

	// delete criteria
	public function delete($aid)
	{
		return $this->db->delete('alternative', array('aid' => $aid));
	}

	// function to check used data 
	public function check_delete($schema, $dba, $process_no, $line_type)
	{
		$dba->where('process_no', $process_no);
		$dba->where('line_type', $line_type);
		$res = $dba->count_all_results($schema . '.tl_data_collection');
		return $res;
	}
}
