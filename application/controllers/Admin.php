<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting');
    }

    public function index()
    {
        $data = array(
            'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
            'title2' => 'Dashboard',
            'isi'   => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
    }

    public function pendaftaran()
    {
       $this->form_validation->set_rules('nip', 'NIP', 'required');
       $this->form_validation->set_rules('nama_kepsek', 'Nama Kepala Sekolah', 'required');
       $this->form_validation->set_rules('sambutan', 'Sambutan Kepala Sekolah', 'required');

       if ($this->form_validation->run() == TRUE) {
        $config['upload_path'] = './foto_kepsek/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_kepsek'))
        {
                        // var_dump($this->upload->display_errors());

            $data = array(
                'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                'title2' => 'Setting Web Sekolah',
                'setting' => $this->m_setting->detail(),
                'isi'   => 'admin/v_setting'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }
        else
        {
            $upload_data             = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_kepsek/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
                        //menghapus file foto lama
            $setting=$this->m_setting->detail();
            if ($setting->foto_kepsek !="") {
                unlink('./foto_kepsek/'.$setting->foto_kepsek);
            }
                        //end menghapus foto
            $data = array(
                'id'            => '1',
                'nip'           => $this->input->post('nip'),
                'nama_kepsek'   => $this->input->post('nama_kepsek'),
                'sambutan'      => $this->input->post('sambutan'),
                'foto_kepsek'   => $upload_data['uploads']['file_name']
            );
            $this->m_setting->save_setting($data);
            $this->session->set_flashdata('pesan', 'Settingan Web Telah Dirubah.');
                        // redirect('admin/setting');

        }

        $data = array(
            'id'            => '1',
            'nip'           => $this->input->post('nip'),
            'nama_kepsek'   => $this->input->post('nama_kepsek'),
            'sambutan'      => $this->input->post('sambutan'),
        );
        $this->m_setting->save_setting($data);
        $this->session->set_flashdata('pesan', 'Settingan Web Telah Dirubah.');
        redirect('admin/setting');
    }
    $data = array(
        'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
        'title2' => 'Setting Informasi Pendaftaran Web Sekolah',
        'setting' => $this->m_setting->pendaftaran()->row(),
        'isi'   => 'admin/pendaftaraninfo'
    );
    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
}

public function setting()
{
    $this->form_validation->set_rules('nip', 'NIP', 'required');
    $this->form_validation->set_rules('nama_kepsek', 'Nama Kepala Sekolah', 'required');
    $this->form_validation->set_rules('sambutan', 'Sambutan Kepala Sekolah', 'required');
    
    if ($this->form_validation->run() == TRUE) {
        $config['upload_path'] = './foto_kepsek/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_kepsek'))
        {
                        // var_dump($this->upload->display_errors());

            $data = array(
                'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
                'title2' => 'Setting Web Sekolah',
                'setting' => $this->m_setting->detail(),
                'isi'   => 'admin/v_setting'
            );
            $this->load->view('admin/layout/v_wrapper',$data,FALSE);

        }
        else
        {
            $upload_data             = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_kepsek/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
                        //menghapus file foto lama
            $setting=$this->m_setting->detail();
            if ($setting->foto_kepsek !="") {
                unlink('./foto_kepsek/'.$setting->foto_kepsek);
            }
                        //end menghapus foto
            $data = array(
                'id'            => '1',
                'nip'           => $this->input->post('nip'),
                'nama_kepsek'   => $this->input->post('nama_kepsek'),
                'sambutan'      => $this->input->post('sambutan'),
                'foto_kepsek'   => $upload_data['uploads']['file_name']
            );
            $this->m_setting->save_setting($data);
            $this->session->set_flashdata('pesan', 'Settingan Web Telah Dirubah.');
                        // redirect('admin/setting');

        }

        $data = array(
            'id'            => '1',
            'nip'           => $this->input->post('nip'),
            'nama_kepsek'   => $this->input->post('nama_kepsek'),
            'sambutan'      => $this->input->post('sambutan'),
        );
        $this->m_setting->save_setting($data);
        $this->session->set_flashdata('pesan', 'Settingan Web Telah Dirubah.');
        redirect('admin/setting');
    }
    $data = array(
        'title' => 'SD Negeri Utan Kayu Selatan 18 Pagi',
        'title2' => 'Setting Web Sekolah',
        'setting' => $this->m_setting->detail(),
        'isi'   => 'admin/v_setting'
    );
    $this->load->view('admin/layout/v_wrapper',$data,FALSE);
}
}

/* End of file Admin.php */