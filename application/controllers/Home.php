<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->model('m_setting');
    }
 
    public function index()
    {
        $data = array(
                    'title' => 'Web Sekolah',
                    'berita' => $this->m_home->berita(3,0),
                    'sambutan' => $this->m_setting->detail(),
                    'gallery' => $this->m_home->gallery(3),
                    'fasilitas' => $this->m_home->fasilitas(3),
                    'isi'   => 'v_home'
                );
        $this->load->view('layout/v_wrapperhome',$data,FALSE);
    }

    public function berita()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url('home/berita');
        $config['total_rows'] = count($this->m_home->total_berita());
        $config['per_page'] = 8;
        $config['uri_segmen'] = 3;
        //start dan limit
            $limit= $config['per_page'];
            $start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
        //--------------------
        $config['first_link']      = 'First';
        $config['last_link']       = 'Last';
        $config['next_link']       = 'Next';
        $config['prev_link']       = 'Prev';
        $config['full_tag_open']   = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $config['cur_tag_open']    = '<li class="active"><a>';
        $config['cur_tag_close']    = '<a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']    = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']    = '</li>';
        $config['first_tag_open']    = '<li>';
        $config['first_tag_close']    = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']    = '</li>';
        $config['full_tag_close']   = '</ul></div>';
        //-------------------
        $this->pagination->initialize($config);
        
        $data = array(
            'paginasi' => $this->pagination->create_links(),
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->berita($limit,$start),
            'title' => 'Berita',
            'isi'   => 'v_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }



    public function detail_berita($slug_berita)
    {
        $data = array(
            'title' => 'Detail Berita',
            'latest_berita' => $this->m_home->latest_berita(),
            'berita' => $this->m_home->detail_berita($slug_berita),
            'isi'   => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function gallery()
    {
        $data = array(
            'title' => 'Gallery Foto',
            'gallery' => $this->m_home->gallery(),
            'isi'   => 'v_gallery'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_gallery($id_gallery)
    {
        $data = array(
            'title' => 'Detail Gallery',
            'gallery' => $this->m_home->detail_gallery($id_gallery),
            'nama_gallery' => $this->m_home->nama_gallery($id_gallery),
            'isi'   => 'v_detail_gallery'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function fasilitas()
    {
        $data = array(
            'title' => 'Fasilitas',
            'fasilitas' => $this->m_home->fasilitas(),
            'isi'   => 'v_fasilitas'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function detail_fasilitas($id_fasilitas)
    {
        $data = array(
            'title' => 'Detail Fasilitas',
            'fasilitas' => $this->m_home->detail_fasilitas($id_fasilitas),
            'nama_fasilitas' => $this->m_home->nama_fasilitas($id_fasilitas),
            'isi'   => 'v_detail_fasilitas'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function sejarah()
    {
        $data = array(
            'title' => 'Sejarah Sekolah',
            'sejarah' => $this->m_setting->detail(),
            'isi'   => 'v_sejarah'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function visi_misi()
    {
        $data = array(
            'title' => 'Visi Dan Misi',
            'visi_misi' => $this->m_setting->detail(),
            'isi'   => 'v_visimisi'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function kontak()
    {
        $data = array(
            'title' => 'Kontak',
            'kontak' => $this->m_setting->detail(),
            'isi'   => 'v_kontak'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function video()
    {
        $data = array(
            'title' => 'Video',
            'video' => $this->m_setting->detail(),
            'isi'   => 'v_video'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }

    public function informasi_pendaftaran()
    {
        $data = array(
            'title' => 'Daftar',
            'daftar' => $this->m_setting->detail(),
            'isi'   => 'v_informasi_pendaftaran'
        );
        $this->load->view('layout/v_wrapper',$data,FALSE);
    }
}

/* End of file Home.php */