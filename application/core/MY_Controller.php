<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Sistem Informasi Aparatur Jabar';
        $this->data['page_description'] = 'Dashboard SIAp Jabar BKD';
        $this->data['before_closing_head'] = '';
        $this->data['before_closing_body'] = '';
    }

    protected function render($the_view = NULL, $template = 'public_master')
    {
        log_message('INFO','Inside MY_Controller : '.$template);

        if($template == 'json' || $this->input->is_ajax_request())
        {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }
        elseif(is_null($template))
        {
            $this->load->view($the_view,$this->data);
        }
        else
        {
            log_message('INFO','inside Else '.$the_view);
            log_message('INFO','templates/' . $template . '_view');
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $this->data, TRUE);
            $this->load->view('templates/' . $template . '_view', $this->data);
        }
    }
}
class Auth_Controller extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        if($this->ion_auth->logged_in()===FALSE)
        {
            redirect('user/login');
        }
    }
    protected function render($the_view = NULL, $templateAuth = 'auth_master')
    {
        log_message('INFO','Inside Auth_Controller : '.$templateAuth);
        parent::render($the_view, $templateAuth);
    }
}
