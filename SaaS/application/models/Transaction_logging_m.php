<?php
class Transaction_logging_m extends CI_Model {
    const T_NAME = "transaction_logging";
    public function insert($data) {
        $this->db->insert(self::T_NAME, $data);
        return $this->db->insert_id();
    }

    public function get_datatables_query($request) {
        $columns = array('id', 'transaction_id', 'score', 'type', 'date');
        $search = $request['search']['value'];
        $order = $request['order'][0]['column'];
        $dir = $request['order'][0]['dir'];
        $this->db->group_start()
            ->like("transaction_logging.id", $search)
            ->or_like("transaction_logging.transaction_id", $search)
            ->or_like("transaction_logging.score", $search)
            ->or_like("score_category.type", $search)
            ->or_like("transaction_logging.date", $search)
            ->group_end();
        if (isset($get['order'])) {
            $this->db->order_by($columns[$order], $dir);
        }
    }

    public function get_count_all() {
        return $this->db->from(self::T_NAME)->count_all_results();
    }

    public function get_count_filtered($request) {
        $this->db->from(self::T_NAME);
        $this->db->join("score_category", "transaction_logging.score_category=score_category.id");
        $this->get_datatables_query($request);
        return $this->db->get()->num_rows();
    }

    public function get_transaction_logging($request) {
        $this->db->from(self::T_NAME);
        $this->db->select("transaction_logging.id, transaction_logging.transaction_id, transaction_logging.score, score_category.type, transaction_logging.date");
        $this->db->join("score_category", "transaction_logging.score_category=score_category.id");
        $this->get_datatables_query($request);
        $this->db->limit($request['length'], $request['start']);

        $result = $this->db->get()->result_array();
        $totalCounts = $this->get_count_all();
        $filteredCounts = $this->get_count_filtered($request);

        return array(
            "draw" => intval($request['draw']),
            "recordsTotal" => intval($totalCounts),
            "recordsFiltered" => intval($filteredCounts),
            "data" => $result
        );
    }
    
}