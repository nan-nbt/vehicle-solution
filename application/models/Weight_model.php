<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Weight_model extends CI_Model
{

    // rules for validation
    public function rules()
    {
        return [
            ['field' => 'wid', 'label' => 'Weight ID', 'rules' => 'required']
        ];
    }

    // get all data criteria
    public function getAll()
    {
        $this->db->order_by('wid', 'asc');
        return $this->db->get('weight')->result();
    }

    // get detail data criteria by cid
    public function save($data)
    {
        return $this->db->insert('weight', $data);
    }
}
