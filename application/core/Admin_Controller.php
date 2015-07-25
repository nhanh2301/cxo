<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['site_title'] = 'Administrator Control Panel';
    }

    protected function render($views = NULL, $template = 'admin') {
        parent::render($views, $template);
    }
}