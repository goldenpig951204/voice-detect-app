<?php
class Ticket extends MY_Controller {
    public function index() {
        $data['styles'] = array('css/pages/ticket.css');
        $data['scripts'] = array('js/pages/ticket.js');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/ticket');
        $this->load->view('templates/footer', $data);
    }

    public function get_tickets() {
        try {
            $request = $this->input->get();
            $data = $this->ticket_m->get_tickets($request);
            header('Content-Type: application/json');
            echo json_encode($data);
        } catch (Exception $e) {
            header('Content-Type: application/json');
            echo json_encode(array("error" => $e->getMessage()));
        }
    }
}