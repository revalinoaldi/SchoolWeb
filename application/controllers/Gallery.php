<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');
    }

    public function index()
    {
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Gallery Foto',
            'gallery'  => $this->m_gallery->lists(),
            'isi'    => 'admin/gallery/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul'))
                {

                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Add Gallery',
                        'error'  => $this->upload->display_errors(),
                        'isi'    => 'admin/gallery/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'nama_gallery'           => $this->input->post('nama_gallery'),
                                    'sampul'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_gallery->add($data);
                    $this->session->set_flashdata('pesan', 'Gallery Berhasil Disimpan.');
                    redirect('gallery');

                }
        }
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Add Gallery',
            'isi'    => 'admin/gallery/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function edit($id_gallery)
    {
        $this->form_validation->set_rules('nama_gallery', 'Nama Gallery', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('sampul'))
                {

                    $data = array(
                        'title'  => 'SMK Nurul Huda',
                        'title2' => 'Edit Gallery',
                        'error'  => $this->upload->display_errors(),
                        'gallery' => $this->m_gallery->detail($id_gallery),
                        'isi'    => 'admin/gallery/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {

                    //menghapus file foto lama
                    $gallery=$this->m_gallery->detail($id_gallery);
                    if ($gallery->sampul !="") {
                        unlink('./sampul/'.$gallery->sampul);
                    }
                    //end menghapus foto

                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './sampul/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'id_gallery'        => $id_gallery,
                                    'nama_gallery'           => $this->input->post('nama_gallery'),
                                    'sampul'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_gallery->edit($data);
                    $this->session->set_flashdata('pesan', 'Gallery Berhasil Diedit.');
                    redirect('gallery');

                }

                $data = array(
                    'id_gallery'        => $id_gallery,
                    'nama_gallery'           => $this->input->post('nama_gallery'),

                 );
                $this->m_gallery->edit($data);
                $this->session->set_flashdata('pesan', 'Gallery Berhasil Diedit.');
                redirect('gallery');
        }
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Edit Gallery',
            'gallery' => $this->m_gallery->detail($id_gallery),
            'isi'    => 'admin/gallery/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function delete($id_gallery)
    {
        //menghapus file foto lama
        $gallery=$this->m_gallery->detail($id_gallery);
        if ($gallery->sampul !="") {
            unlink('./sampul/'.$gallery->sampul);
        }
        //end menghapus foto

        $data = array('id_gallery' => $id_gallery );
        $this->m_gallery->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus.');
        redirect('gallery');
    }

    public function add_foto($id_gallery)
    {
        $this->form_validation->set_rules('ket_foto', 'Nama Gallery', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto'))
                {
                    $gallery= $this->m_gallery->detail($id_gallery);
                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Add Foto Gallery : '.$gallery->nama_gallery,
                        'error'  => $this->upload->display_errors(),
                        'gallery' =>  $gallery,
                        'foto'     => $this->m_gallery->lists_foto($id_gallery),
                        'isi'    => 'admin/gallery/v_add_foto'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {

                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'id_gallery'        => $id_gallery,
                                    'ket_foto'           => $this->input->post('ket_foto'),
                                    'foto'  => $upload_data['uploads']['file_name']

                                 );
                    $this->m_gallery->add_foto($data);
                    $this->session->set_flashdata('pesan', 'Foto Berhasil Ditambahkan.');
                    redirect('gallery/add_foto/'.$id_gallery);

                }
        }
        $gallery= $this->m_gallery->detail($id_gallery);
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Add Foto Gallery : '.$gallery->nama_gallery,
            'gallery' => $gallery,
            'foto'     => $this->m_gallery->lists_foto($id_gallery),
            'isi'    => 'admin/gallery/v_add_foto'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

    }

    public function delete_foto($id_gallery,$id_foto)
    {
        //menghapus file foto lama
        $foto=$this->m_gallery->detail_foto($id_foto);
        if ($foto->foto !="") {
            unlink('./foto/'.$foto->foto);
        }
        //end menghapus foto

        $data = array('id_foto' => $id_foto );
        $this->m_gallery->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto Berhasil Di Hapus.');
        redirect('gallery/add_foto/'.$id_gallery);
    }

}

/* End of file Gallery.php */