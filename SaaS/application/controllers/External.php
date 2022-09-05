<?php
class External extends CI_Controller {
    public function enrolment() {
        $request = $this->input->post();
        $id = $this->profiles_m->insert_profile($request);
        $result = $this->profile_loggings_m->insert_logging($id, $event = 1);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function verification() {
        $request = $this->input->post();
    }
}