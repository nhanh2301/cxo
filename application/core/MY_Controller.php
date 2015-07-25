<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected  $data = array();

    function __construct()
    {
        parent::__construct();
        $this->data['site_title'] = 'C?m Xuyên Online';
    }

    protected function render($views = NULL, $template = 'master') {
        if($template == 'json' || $this->input->is_ajax_request()) {
            header('Content-Type: application/json');
            echo json_decode($this->data);
        } else {
            $this->data['views_content'] = (is_null($views)) ? '' : $this->load->view($views, $this->data, TRUE);
            $this->load->view($template.'_layout', $this->data);
        }
    }
}