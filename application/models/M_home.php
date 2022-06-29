<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    //memunculkan berita dengan paging
    public function berita($limit,$start)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita','desc');
        $this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

    public function total_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita','desc');
        return $this->db->get()->result();
    }

    public function detail_berita($slug_berita)
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->where('slug_berita', $slug_berita);
        return $this->db->get()->row();
    }

    public function latest_berita()
    {
        $this->db->select('*');
        $this->db->from('tbl_berita');
        $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
        $this->db->order_by('id_berita','desc');
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function gallery($limit = 0)
    {
       $this->db->select('tbl_gallery.*,count(tbl_foto.id_gallery) as jml_foto');
       $this->db->from('tbl_gallery');
       $this->db->join('tbl_foto', 'tbl_foto.id_gallery = tbl_gallery.id_gallery', 'left');
       $this->db->group_by('tbl_gallery.id_gallery');
       $this->db->order_by('tbl_gallery.id_gallery', 'desc');

       if ($limit > 0) {
           $this->db->limit($limit);
       }

       return $this->db->get()->result();
    }

    public function detail_gallery($id_gallery)
    {
        $this->db->select('*');
        $this->db->from('tbl_foto');
        $this->db->where('id_gallery', $id_gallery);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function nama_gallery($id_gallery)
    {
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        $this->db->where('id_gallery', $id_gallery);
        return $this->db->get()->row();
    }

    public function fasilitas($limit = 0)
    {
        $this->db->select('tbl_fasilitas.*,count(tbl_fotofasilitas.id_fasilitas) as jml_foto');
        $this->db->from('tbl_fasilitas');
        $this->db->join('tbl_fotofasilitas', 'tbl_fotofasilitas.id_fasilitas = tbl_fasilitas.id_fasilitas', 'left');
        $this->db->group_by('tbl_fasilitas.id_fasilitas');
        $this->db->order_by('tbl_fasilitas.id_fasilitas', 'desc');
        
        if ($limit > 0) {
           $this->db->limit($limit);
       }
        return $this->db->get()->result();
    }

    public function detail_fasilitas($id_fasilitas)
    {
        $this->db->select('*');
        $this->db->from('tbl_fotofasilitas');
        $this->db->where('id_fasilitas', $id_fasilitas);
        $this->db->order_by('id_foto', 'desc');
        return $this->db->get()->result();
    }

    public function nama_fasilitas($id_fasilitas)
    {
        $this->db->select('*');
        $this->db->from('tbl_fasilitas');
        $this->db->where('id_fasilitas', $id_fasilitas);
        return $this->db->get()->row();
    }

    // public function slider_berita()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tbl_berita');
    //     $this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
    //     $this->db->order_by('id_berita','desc');
    //     $this->db->limit(5);
    //     return $this->db->get()->result();
    // }

}

/* End of file M_home.php */

