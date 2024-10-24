<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_model extends CI_Model
{

	// rules for validation
	public function rules()
	{
		return [
			['field' => 'mid', 'label' => 'Mapping ID', 'rules' => 'required'],
			['field' => 'aid', 'label' => 'Alternative ID', 'rules' => 'required'],
			['field' => 'cid', 'label' => 'Criteria ID', 'rules' => 'required'],
			['field' => 'weight', 'label' => 'Weight', 'rules' => 'required']
		];
	}

	// get all data mapping
	public function getAll()
	{
		$sql = "SELECT mapping.*, alternative.aid, alternative.name anm, criteria.cid, criteria.name cnm 
                FROM mapping 
                    JOIN alternative ON alternative.aid = mapping.aid 
                    JOIN criteria ON criteria.cid = mapping.cid 
				ORDER BY cast(substr(mapping.mid,2,3) as decimal)";

		return $this->db->query($sql)->result();
	}

	// get data mapping by id
	public function getMapById($mid)
	{
		$sql = "SELECT mapping.*, alternative.aid, alternative.name anm, criteria.cid, criteria.name cnm 
                FROM mapping 
                    JOIN alternative ON alternative.aid = mapping.aid 
                    JOIN criteria ON criteria.cid = mapping.cid 
                WHERE mapping.mid = '$mid' 
                ORDER BY mapping.mid";

		return $this->db->query($sql)->result();
	}

	// get data mapping by alternative
	public function getMapByAlt($array_aid)
	{
		$aid = implode(', ', $array_aid);

		$sql = "SELECT mapping.*, alternative.aid, alternative.name anm, alternative.description adesc, alternative.url,
					criteria.cid, criteria.name cnm, criteria.impact imp, criteria.weight cweight
                FROM mapping 
                    JOIN alternative ON alternative.aid = mapping.aid 
                    JOIN criteria ON criteria.cid = mapping.cid 
                WHERE mapping.aid IN ($aid) 
                ORDER BY cast(substr(mapping.aid, 2, 3) as decimal), cast(substr(mapping.cid, 2, 3) as decimal)";

		return $this->db->query($sql)->result();
	}

	// get data mapping by id
	public function getMapByAltCri($aid, $cid)
	{
		$sql = "SELECT mapping.*, alternative.aid, alternative.name anm, criteria.cid, criteria.name cnm 
                FROM mapping 
                    JOIN alternative ON alternative.aid = mapping.aid 
                    JOIN criteria ON criteria.cid = mapping.cid 
                WHERE mapping.aid = '$aid'
					AND mapping.cid = '$cid' 
                ORDER BY mapping.mid";

		return $this->db->query($sql)->result();
	}

	// function save
	public function save($data)
	{
		return $this->db->insert('mapping', $data);
	}

	// function update
	public function update($data)
	{
		return $this->db->update('mapping', $data, array('mid' => $data['mid']));
	}

	// delete criteria
	public function delete($mid)
	{
		return $this->db->delete('mapping', array('mid' => $mid));
	}
}
