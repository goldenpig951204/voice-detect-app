<?php

class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->check_logged();
    }

    public function check_logged() {
        $isLogged = $this->session->userdata("isLogged");
        if (empty($isLogged)) {
            redirect('login');
        }
    }
}