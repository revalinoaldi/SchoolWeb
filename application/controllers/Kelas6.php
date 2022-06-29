<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas6 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas6');
    }
  
    public function index()
    {
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Data Siswa Kelas 6',
            'kelas6'  => $this->m_kelas6->lists(),
            'isi'    => 'admin/kelas6/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_kelas6/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto_kelas6'))
                {

                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Add Data Siswa Kelas 6',
                        'error'  => $this->upload->display_errors(),
                        'isi'    => 'admin/kelas6/v_add'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = './foto_kelas6/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'nis'           => $this->input->post('nis'),
                                    'nama_siswa'    => $this->input->post('nama_siswa'),
                                    'tempat_lahir'  => $this->input->post('tempat_lahir'),
                                    'tgl_lahir'     => $this->input->post('tgl_lahir'),
                                    'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
                                    'agama'    => $this->input->post('agama'),
                                    'kelas'         => $this->input->post('kelas'),
                                    'foto_kelas6'    => $upload_data['uploads']['file_name']
                                 );
                    $this->m_kelas6->add($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan.');
                    redirect('kelas6');

                }
        }

        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Add Data Siswa Kelas 6',
            'isi'    => 'admin/kelas6/v_add'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        
    }

    public function edit($id_siswa)
    {
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        
       

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_kelas6/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto_kelas6'))
                {

                    $data = array(
                        'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                        'title2' => 'Edit Data Siswa Kelas 6',
                        'error'  => $this->upload->display_errors(),
                        'siswa'   => $this->m_kelas6->detail($id_siswa),
                        'isi'    => 'admin/kelas6/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper',$data,FALSE);

                }
                else
                {
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto_kelas6/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
                    //menghapus file foto lama
                    $kelas6=$this->m_kelas6->detail($id_siswa);
                    if ($kelas6->foto_kelas6 !="") {
                        unlink('./foto_kelas6/'.$kelas6->foto_kelas6);
                    }
                    //end menghapus foto
                    $data = array(
                                    'id_siswa'       => $id_siswa,
                                    'nis'            => $this->input->post('nis'),
                                    'nama_siswa'     => $this->input->post('nama_siswa'),
                                    'tempat_lahir'   => $this->input->post('tempat_lahir'),
                                    'tgl_lahir'      => $this->input->post('tgl_lahir'),
                                    'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
                                    'agama'    => $this->input->post('agama'),
                                    'kelas'          => $this->input->post('kelas'),
                                    'foto_kelas6'     => $upload_data['uploads']['file_name']
                                 );
                    $this->m_kelas6->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit.');
                    redirect('kelas6');

                }
                    $upload_data             = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './foto_kelas6/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array(
                                    'id_siswa'       => $id_siswa,
                                    'nis'            => $this->input->post('nis'),
                                    'nama_siswa'     => $this->input->post('nama_siswa'),
                                    'tempat_lahir'   => $this->input->post('tempat_lahir'),
                                    'tgl_lahir'      => $this->input->post('tgl_lahir'),
                                    'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
                                    'agama'    => $this->input->post('agama'),
                                    'kelas'          => $this->input->post('kelas'),
                                 );
                    $this->m_kelas6->edit($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit.');
                    redirect('kelas6');
        }
        $data = array(
            'title'  => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Edit Data Siswa Kelas 6',
            'kelas6'   => $this->m_kelas6->detail($id_siswa),
            'isi'    => 'admin/kelas6/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function delete($id_siswa)
    {
        //menghapus file foto lama
        $kelas6=$this->m_kelas6->detail($id_siswa);
        if ($kelas6->foto_kelas1 !="") {
            unlink('./foto_kelas6/'.$kelas6->foto_kelas6);
        }
        //end menghapus foto

        $data = array('id_siswa' => $id_siswa );
        $this->m_kelas6->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus.');
        redirect('kelas6');
    }

}

    /* End of file Kelas6.php */