<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_fasilitas');
    }
    
    public function index()
    {
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Fasilitas Sekolah',
            'fasilitas'  => $this->m_fasilitas->lists(),
            'isi'    => 'admin/fasilitas/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul_fasilitas'))
                {

                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Add Fasilitas',
                        'error'  => $this->upload->display_errors(),
                        'isi'    => 'admin/fasilitas/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './sampul_fasilitas/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'nama_fasilitas'           => $this->input->post('nama_fasilitas'),
                                    'sampul_fasilitas'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_fasilitas->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan.');
                    redirect('fasilitas');

                }
        }
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Add Fasilitas',
            'isi'    => 'admin/fasilitas/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function edit($id_fasilitas)
    {
        $this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul_fasilitas'))
                {

                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Edit Fasilitas',
                        'error'  => $this->upload->display_errors(),
                        'fasilitas' => $this->m_fasilitas->detail($id_fasilitas),
                        'isi'    => 'admin/fasilitas/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {

                    //menghapus file foto lama
                    $fasilitas=$this->m_fasilitas->detail($id_fasilitas);
                    if ($fasilitas->sampul_fasilitas !="") {
                        unlink('./sampul_fasilitas/'.$fasilitas->sampul_fasilitas);
                    }
                    //end menghapus foto
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './sampul_fasilitas/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'id_fasilitas'      => $id_fasilitas,
                                    'nama_fasilitas'    => $this->input->post('nama_fasilitas'),
                                    'sampul_fasilitas'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_fasilitas->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit.');
                    redirect('fasilitas');

                }

                $data = array(
                    'id_fasilitas'      => $id_fasilitas,
                    'nama_fasilitas'    => $this->input->post('nama_fasilitas'),
                 );
                $this->m_fasilitas->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit.');
                redirect('fasilitas');
        }
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Edit Fasilitas',
            'fasilitas' => $this->m_fasilitas->detail($id_fasilitas),
            'isi'    => 'admin/fasilitas/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function delete($id_fasilitas)
    {
        //menghapus file foto lama
        $fasilitas=$this->m_fasilitas->detail($id_fasilitas);
        if ($fasilitas->sampul_fasilitas !="") {
            unlink('./sampul_fasilitas/'.$fasilitas->sampul_fasilitas);
        }
        //end menghapus foto

        $data = array('id_fasilitas' => $id_fasilitas );
        $this->m_fasilitas->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus.');
        redirect('fasilitas');
    }

    public function add_foto($id_fasilitas)
    {
        $this->form_validation->set_rules('ket_foto', 'Nama Fasilitas', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto_fasilitas'))
                {

                    $fasilitas= $this->m_fasilitas->detail($id_fasilitas);
                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Add Foto Fasilitas : '.$fasilitas->nama_fasilitas,
                        'error'  => $this->upload->display_errors(),
                        'fasilitas' => $fasilitas,
                        'foto_fasilitas'     => $this->m_fasilitas->lists_foto_fasilitas($id_fasilitas),
                        'isi'    => 'admin/fasilitas/v_add_foto'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {

                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto_fasilitas/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'id_fasilitas'      => $id_fasilitas,
                                    'ket_foto'    => $this->input->post('ket_foto'),
                                    'foto_fasilitas'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_fasilitas->add_foto($data);
                    $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan.');
                    redirect('fasilitas/add_foto/'.$id_fasilitas);

                }
        }
        $fasilitas= $this->m_fasilitas->detail($id_fasilitas);
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Add Foto Fasilitas : '.$fasilitas->nama_fasilitas,
            'fasilitas' => $fasilitas,
            'foto_fasilitas'     => $this->m_fasilitas->lists_foto_fasilitas($id_fasilitas),
            'isi'    => 'admin/fasilitas/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete_foto($id_fasilitas,$id_foto)
    {
        //menghapus file foto lama
        $foto_fasilitas=$this->m_fasilitas->detail_foto($id_foto);
        if ($foto_fasilitas->foto_fasilitas !="") {
            unlink('./foto_fasilitas/'.$foto_fasilitas->foto_fasilitas);
        }
        //end menghapus foto

        $data = array('id_foto' => $id_foto );
        $this->m_fasilitas->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Dihapus.');
        redirect('fasilitas/add_foto/'.$id_fasilitas);
    }

}

/* End of file Fasilitas.php */