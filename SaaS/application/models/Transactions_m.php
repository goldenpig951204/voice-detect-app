<?php
class Transactions_m extends CI_Model {
    public function get_datatable_transactions($request) {
        $draw = $request['draw'];
        $offset = $request['start'];
        $limit = $request['length'];
        $order = $request['order'][0];
        $search = $request['search']['value'];
        $columns = array('id', 'target_profile', 'grade');

        $totalCounts = $this->db->from("transactions")->count_all_results();

        $query = $this->db->from("transactions")
            ->select('transactions.*, profiles.name, transaction_grade.type')
            ->group_start()
            ->like('transactions.id', $search)
            ->or_like('profiles.name', $search)
            ->or_like('transaction_grade.type', $search)
            ->group_end()
            ->join('profiles', 'profiles.id=transactions.target_profile')
            ->join('transaction_grade', 'transaction_grade.id=transactions.grade')
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
}