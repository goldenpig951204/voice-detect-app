<?php
class Profiles extends MY_Controller {

    public function index() {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/profiles.js"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/profiles/list', $data);
        $this->load->view('templates/footer', $data);
    }

    public function get_datatable_profiles() {
        $request = $this->input->get();
        $result = $this->profiles_m->get_datatable_profiles($request);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function individual($id) {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/profile_individual.js"
        );
        $data['profile'] = $this->profiles_m->get_profile_by_id($id);
        $data['loggings'] = $this->profile_loggings_m->get_loggings_by_profile_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/profiles/individual');
        $this->load->view('templates/footer', $data);
    }

    public function loggings() {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/profile_loggings.js"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/profiles/loggings');
        $this->load->view('templates/footer', $data);
    }

    public function get_datatable_profile_loggings() {
        $request = $this->input->get();
        $result = $this->profile_loggings_m->get_datatable_profile_loggings($request);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function set_profile_permission($id) {
        try {
            $status = $this->input->post("status");
            $result = $this->profiles_m->set_profile_permission($id, $status);
            header('Content-Type: application/json');
            echo json_encode(["result" => $result]);
        } catch (Exception $e) {
            header('Content-Type: application/json');
            echo json_encode(["error" => $e->getMessage()]);
        }
    }
}