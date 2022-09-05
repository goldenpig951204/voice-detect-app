<?php
class Ticket_m extends CI_Model {
    const T_NAME = "tickets";

    public function insert($data) {
        $this->db->insert(self::T_NAME, $data);
        return $this->db->insert_id();
    }

    public function get_datatables_query($request) {
        $columns = array('id', 'type', 'transaction_id', 'name', 'status', 'open_date', 'close_date');
        $search = $request['search']['value'];
        $order = $request['order'][0]['column'];
        $dir = $request['order'][0]['dir'];
        $this->db->group_start()
            ->like("tickets.id", $search)
            ->or_like("ticket_type.type", $search)
            ->or_like("tickets.transaction_id", $search)
            ->or_like("profile.name", $search)
            ->or_like("profile_status.type", $search)
            ->or_like("tickets.open_date", $search)
            ->or_like("tickets.close_date", $search)
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
        $this->db->join("ticket_type", "tickets.type=ticket_type.id")
            ->join("profile", "tickets.profile_id=profile.id")
            ->join("profile_status", "tickets.status=profile_status.id");
        $this->get_datatables_query($request);
        return $this->db->get()->num_rows();
    }

    public function get_tickets($request) {
        $this->db->from(self::T_NAME);
        $this->db->select("tickets.id, ticket_type.type, tickets.transaction_id, profile.name, profile_status.type as status, tickets.open_date, tickets.close_date");
        $this->db->join("ticket_type", "tickets.type=ticket_type.id")
            ->join("profile", "tickets.profile_id=profile.id")
            ->join("profile_status", "tickets.status=profile_status.id");
        $this->get_datatables_query($request);
        $this->db->limit($request['length'], $request['start']);

        $results = $this->db->get()->result_array();
        $totalCounts = $this->get_count_all();
        $filteredCounts = $this->get_count_filtered($request);
        return array(
            "draw" => intval($request['draw']),
            "recordsTotal" => intval($totalCounts),
            "recordsFiltered" => intval($filteredCounts),
            "data" => $results
        );
    }
}