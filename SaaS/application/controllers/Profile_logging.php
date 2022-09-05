<?php
class Profile_logging extends MY_Controller {
    public function index() {
        $data['styles'] = array('css/pages/profile_logging.css');
        $data['scripts'] = array('js/pages/profile_logging.js');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/profile_logging');
        $this->load->view('templates/footer', $data);
    }

    public function get_profile_loggings() {
        $request = $this->input->get();
        $data = $this->profile_logging_m->get_profile_loggings($request);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}