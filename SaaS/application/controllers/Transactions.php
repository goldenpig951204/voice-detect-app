<?php
class Transactions extends MY_Controller {
    public function index() {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/transactions.js"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/transactions/list');
        $this->load->view('templates/footer', $data);
    }

    public function get_datatable_transactions() {
        $request = $this->input->get();
        $result = $this->transactions_m->get_datatable_transactions($request);
        header('Content-Type: application/json');
        echo json_encode($result);
    }

    public function individual($id) {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/transaction_individual.js"
        );
        $data['loggings'] = $this->transaction_loggings_m->get_loggings_by_transaction_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/transactions/individual');
        $this->load->view('templates/footer', $data);
    } 

    public function loggings() {
        $data['styles'] = array(
            "plugins/vendor_components/datatable/datatables.min.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_components/datatable/datatables.min.js",
            "scripts/pages/transaction_loggings.js"
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/transactions/loggings');
        $this->load->view('templates/footer', $data);
    }

    public function get_datatable_transaction_loggings() {
        $request = $this->input->get();
        $result = $this->transaction_loggings_m->get_datatable_transaction_loggings($request);
        header('Content-Type: application/json');
        echo json_encode($result);
    }
}