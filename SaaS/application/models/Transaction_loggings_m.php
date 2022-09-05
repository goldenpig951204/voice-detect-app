<?php
class Transaction_loggings_m extends CI_Model {
    public function get_datatable_transaction_loggings($request) {
        $draw = $request['draw'];
        $offset = $request['start'];
        $limit = $request['length'];
        $order = $request['order'][0];
        $search = $request['search']['value'];
        $columns = array('id', 'score', 'score_category', 'date');

        $totalCounts = $this->db->from('transaction_loggings')->count_all_results();

        $query = $this->db->from("transaction_loggings")
            ->select("transaction_loggings.*", "score_category.type")
            ->group_start()
            ->like("transaction_loggings.id", $search)
            ->or_like("transaction_loggings.score", $search)
            ->or_like("score_category.type", $search)
            ->or_like("transaction_loggings.date", $search)
            ->group_end()
            ->join("score_category", "transaction_loggings.score_category=score_category.id")
            ->limit($limit, $offset)
            ->order_by($columns[$order['column']], $order['dir'])
            ->get();

        $filteredCounts = $query->num_rows();
        $data = $query->result_array();

        return [
            'draw' => intval($draw),
            'recordsTotal' => intval($totalCounts),
            'recordsFiltered' => intval($filteredCounts),
            'data' => $data
        ];
    }

    public function get_loggings_by_transaction_id($id) {
        $results = $this->db->from("transaction_loggings")
            ->select('transaction_loggings.*,score_category.type')
            ->join("score_category", "transaction_loggings.score_category=score_category.id")
            ->where("transaction_loggings.transaction_id", $id)
            ->get()
            ->result_array();
        return $results;
    }
}