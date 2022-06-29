<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengumuman');
    }

    public function index()
    {
        $data = array(
            'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Pengumuman',
            'Pengumuman' => $this->m_pengumuman->lists(),
            'isi'   => 'admin/pengumuman/v_lists'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                'title2' => 'Add Pengumuman',
                'isi'   => 'admin/pengumuman/v_add'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
                        'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                        'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                        'tgl'              => date('y-m-d')
                    );
        $this->m_pengumuman->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan.');
        redirect('pengumuman');
        }
    }

    public function edit($id_pengumuman)
    {
        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                'title2' => 'Edit Pengumuman',
                'pengumuman' => $this->m_pengumuman->detail($id_pengumuman),
                'isi'   => 'admin/pengumuman/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);
        }else{
        $data = array(
                        'id_pengumuman'    => $id_pengumuman,
                        'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                        'isi_pengumuman'   => $this->input->post('isi_pengumuman'),
                        'tgl'              => date('y-m-d')
                    );
        $this->m_pengumuman->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit.');
        redirect('pengumuman');
        }
    }

    public function delete($id_pengumuman)
    {
        $data = array(
            'id_pengumuman'   => $id_pengumuman,
        );
        $this->m_pengumuman->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('pengumuman');
    }
}

/* End of file Pengumuman.php */
