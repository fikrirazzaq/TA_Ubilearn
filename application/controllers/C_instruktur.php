<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_instruktur extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {

    }

    public function dashboard()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/dashboard_instruktur'; 
        $this->load->view('layout/master', $data);
        
    }

    public function manage_akun()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/akun_instruktur';
        $this->load->view('layout/master', $data);
    }
    public function result_instruktur()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/result_instruktur';
        $this->load->view('layout/master', $data);
    }

    public function add_course()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/add_course';
        $this->load->view('layout/master', $data);
        
    }

    public function lesson()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/lesson';
        $this->load->view('layout/master', $data);
        
    }

    public function detail_lesson()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/detail_lesson';
        $this->load->view('layout/master', $data);
        
    }    

    public function add_lesson()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/add_lesson';
        $this->load->view('layout/master', $data);
        
    }

    public function learning_outcome()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/learning_outcome';
        $this->load->view('layout/master',$data);
    }

    public function add_lo()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/add_LO';
        $this->load->view('layout/master', $data);

    }

    public function add_assessment()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_assessment';
        $this->load->view('layout/master', $data);
        
    }

    public function add_pretest()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_pretest';
        $this->load->view('layout/master', $data);
        
    } 

    public function add_remedial()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_remedial';
        $this->load->view('layout/master', $data);
        
    }  

    public function add_exercise()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/tambah_latihan';
        $this->load->view('layout/master', $data);
        
    }
    public function content()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/content';
        $this->load->view('layout/master',$data);
    }
//    public function list_thread_instruktur()
//    {
//        $data['sidebar'] = 'layout/sidebar_instruktur';
//        $data['content'] = 'instruktur/list_thread_instruktur';
//        $this->load->view('layout/master',$data);
//    }
    public function list_thread()
    {
        $data['sidebar'] = 'layout/sidebar_instruktur';
        $data['content'] = 'instruktur/list_thread';
        $this->load->view('layout/master',$data);
    }

}
