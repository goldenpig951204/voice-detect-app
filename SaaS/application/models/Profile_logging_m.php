<?php
class Profile_logging_m extends CI_Model {
    const T_NAME = "profile_logging";
    public function insert($profileId, $event) {
        $result = $this->db->insert(self::T_NAME, array("profile_id" => $profileId, "event" => $event));
        return $result;
    }

    public function get_datatables_query($request) {
        $columns = array('id', 'profile_id', 'event', 'date');
        $search = $request['search']['value'];
        $order = $request['order'][0]['column'];
        $dir = $request['order'][0]['dir'];
        $this->db->group_start()
            ->like("profile_logging.id", $search)
            ->or_like("profile.name", $search)
            ->or_like("profile_event.type", $search)
            ->or_like("profile_logging.date", $search)
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
        $this->db->join("profile", "profile_logging.profile_id = profile.id")->join("profile_event", "profile_logging.event = profile_event.id");
        $this->get_datatables_query($request);
        return $this->db->get()->num_rows();
    }

    public function get_profile_loggings($request) {
        $this->db->from(self::T_NAME);
        $this->db->select("profile_logging.*, profile.name, profile_event.type");
        $this->db->join("profile", "profile_logging.profile_id = profile.id")->join("profile_event", "profile_logging.event = profile_event.id");
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