<?php
class Tickets extends MY_Controller {
    public function index() {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/tickets.js"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/tickets');
        $this->load->view('templates/footer', $data);
    }

    public function get_datatable_tickets() {
        $request = $this->input->get();
        $result = $this->tickets_m->get_datatable_tickets($request);
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}