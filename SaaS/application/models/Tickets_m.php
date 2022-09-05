<?php 
class Tickets_m extends CI_Model {
    public function get_datatable_tickets($request) {
        $draw = $request['draw'];
        $offset = $request['start'];
        $limit = $request['length'];
        $order = $request['order'][0];
        $search = $request['search']['value'];
        $columns = array("id", "type", "transaction_id", "profile_id", "status", "open_date", "close_date");

        $totalCounts = $this->db->from("tickets")->count_all_results();

        $query = $this->db->from("tickets")
            ->select('tickets.*, profiles.name, ticket_type.type AS ticket_type, profile_loggings.event AS status_type')
            ->join("profiles", "profiles.id=tickets.profile_id")
            ->join("ticket_type", "ticket_type.id=tickets.type")
            ->join("profile_loggings", "profile_loggings.id=tickets.status")
            ->group_start()
            ->like("tickets.id", $search)
            ->or_like("ticket_type.type", $search)
            ->or_like("tickets.transaction_id", $search)
            ->or_like("profiles.name", $search)
            ->or_like("profile_loggings.event", $search)
            ->or_like("open_date", $search)
            ->or_like("close_date", $search)
            ->group_end()
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