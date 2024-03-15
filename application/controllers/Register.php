<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        
       
    }

    public function index($param1 = null, $param2 = null, $param3 = null) {
        if ($param1 == 'create') {

            if (method_exists($this->patient_model, 'createNewAkun')) {
                $this->p_model->createNewAkun();
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). '', 'refresh');
            } 
        }

        // Load view and pass data
        $page_data['page_name'] = 'register';
        $page_data['page_title'] = get_phrase('Register');
        $this->load->view('backend/register', $page_data);
    }

}
