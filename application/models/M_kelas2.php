<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas2 extends CI_Model {
 
    public function lists()
    {
       $this->db->select('*');
       $this->db->from('tbl_kelas2');
       $this->db->order_by('id_siswa','desc');
       return $this->db->get()->result();
    }

    public function detail($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tbl_kelas2');
        $this->db->where('id_siswa', $id_siswa);
       return $this->db->get()->row();
    }

    public function add($data)

    {
        $this->db->insert('tbl_kelas2', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->update('tbl_kelas2',$data);
    }

    public function delete($data)
    {
        $this->db->where('id_siswa', $data['id_siswa']);
        $this->db->delete('tbl_kelas2',$data);
    }
}

/* End of file M_kelas2.php */