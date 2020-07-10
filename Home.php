<?php

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_data');

        if($this->session->userdata('login')==null){
            redirect('login');
        }
    }

    public function index(){
        $data = array('data_rehab' => $this->m_data->data_rehab(),);
        $this->load->view('v_home', $data);
    }       
}
?>