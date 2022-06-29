<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model {
 
    public function lists()
    {
        $this->db->select('tbl_fasilitas.*,count(tbl_fotofasilitas.id_fasilitas) as jml_foto');
        $this->db->from('tbl_fasilitas');
        $this->db->join('tbl_fotofasilitas', 'tbl_fotofasilitas.id_fasilitas = tbl_fasilitas.id_fasilitas', 'left');
        $this->db->group_by('tbl_fasilitas.id_fasilitas');
        $this->db->order_by('tbl_fasilitas.id_fasilitas', 'desc');
        return $this->db->get()->result();
    }

    public function lists_foto_fasilitas($id_fasilitas)
    {
        $this->db->select('*');
        $this->db->from('tbl_fotofasilitas');
        $this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_fasilitas', $data);
    }

    public function add_foto($data)
    {
        $this->db->insert('tbl_fotofasilitas', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_fasilitas', $data['id_fasilitas']);
        $this->db->update('tbl_fasilitas', $data);
    }

    public function detail($id_fasilitas)
    {
        $this->db->select('*');
        $this->db->from('tbl_fasilitas');
        $this->db->where('id_fasilitas', $id_fasilitas);
        return $this->db->get()->row();
    }

    public function detail_foto($id_foto)
    {
        $this->db->select('*');
        $this->db->from('tbl_fotofasilitas');
        $this->db->where('id_foto', $id_foto);
        return $this->db->get()->row();
    }

    public function delete($data)
    {
        $this->db->where('id_fasilitas', $data['id_fasilitas']);
        $this->db->delete('tbl_fasilitas', $data);
    }

    public function delete_foto($data)
    {
        $this->db->where('id_foto', $data['id_foto']);
        $this->db->delete('tbl_fotofasilitas', $data);
    }


}

/* End of file M_fasilitas.php */