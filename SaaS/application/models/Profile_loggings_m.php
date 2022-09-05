<?php
class Profile_loggings_m extends CI_Model {
    public function insert_logging($id, $event) {
        $result = $this->db->insert("profile_loggings", ["profile_id" => $id, "event" => $event]);
        return $result;
    }

    public function get_loggings_by_profile_id($id) {
        $results = $this->db->from("profile_loggings")
            ->select("profile_loggings.*, profile_event.type")
            ->join("profile_event", "profile_event.id=profile_loggings.event")
            ->where("profile_id", $id)
            ->get()
            ->result_array();
        return $results;
    }

    public function get_datatable_profile_loggings($request) {
        $draw = $request['draw'];
        $offset = $request['start'];
        $limit = $request['length'];
        $order = $request['order'][0];
        $search = $request['search']['value'];
        $columns = array('id', 'profile_id', 'event', 'date');

        $totalCounts = $this->db->from("profile_loggings")
            ->count_all_results();

        $query = $this->db->from("profile_loggings")
            ->select("profile_loggings.*, profiles.name, profile_event.type")
            ->group_start()
            ->like("profile_loggings.id", $search)
            ->or_like("profiles.name", $search)
            ->or_like("profile_event.type", $search)
            ->or_like("date", $search)
            ->group_end()
            ->join("profiles", "profile_loggings.profile_id=profiles.id")
            ->join("profile_event", "profile_loggings.event=profile_event.id")
            ->limit($limit, $offset)
            ->order_by($columns[$order['column']], $order['dir'])
            ->get();

        $filteredCounts = $query->num_rows();
        $data = $query->result_array();

        return [
            "draw" => intval($draw),
            "recordsTotal" => intval($totalCounts),
            "recordsFiltered" => intval($filteredCounts),
            "data" => $data
        ];

    }
}