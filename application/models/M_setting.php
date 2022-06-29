<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {
 
    public function detail()
    {
       $this->db->select('*');
       $this->db->from('tbl_setting');
       $this->db->where('id', 1);
       return $this->db->get()->row();
    }

    public function save_setting($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_setting', $data);
    }

    public function save_informasi($data,$action)
    {
      if ($action == "update") {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_informasi', $data);
      }else{
        $this->db->insert('tbl_informasi', $data);
      }

      return $this->db->affected_rows() > 0 ? true : false;
    }

    public function pendaftaran($id = '')
    {
      if (@$id) {
        $this->db->where('id', $id);
      }
      return $this->db->get('tbl_informasi', 1, 0);
    }

}

/* End of file M_setting.php */