<?php
class Transaction_logging extends MY_Controller {
    public function index() {
        $data['styles'] = array('css/pages/transaction_logging.css');
        $data['scripts'] = array('js/pages/transaction_logging.js');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/transaction_logging');
        $this->load->view('templates/footer', $data);
    }

    public function get_transaction_logging() {
        try {
            $request = $this->input->get();
            $data = $this->transaction_logging_m->get_transaction_logging($request);
            header('Content-Type: application/json');
            echo json_encode($data);
        } catch (Exception $e) {
            header('Content-Type: application/json');
            echo json_encode(["error" => $e->getMessage()]);
        }
    }
}