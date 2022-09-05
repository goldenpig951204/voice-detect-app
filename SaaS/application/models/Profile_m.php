<?php
class Profile_m extends CI_Model {
    const T_NAME = "profiles";

    public function get_total_counts() {
        return $this->db->from(self::T_NAME)->count_all_results();
    }

    public function insert($profile) {
        $result = $this->db->insert(self::T_NAME, $profile);
        return $this->db->insert_id();
    }

    public function update($id, $status) {
        $result = $this->db->update(self::T_NAME, array("status" => $status), array("id" => $id));
        return $result;
    }

    public function delete($id) {
        $result = $this->db->delete(self::T_NAME, array("id" => $id));
        return $result;
    }


    public function get_datatables_query($request) {
        $columns = array('id', 'name', 'status');
        $search = $request['search']['value'];
        $order = $request['order'][0]['column'];
        $dir = $request['order'][0]['dir'];
        $this->db->group_start()
            ->like("profiles.id", $search)
            ->or_like("profiles.name", $search)
            ->or_like("profiles.status", $search)
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
        $this->get_datatables_query($request);
        return $this->db->get()->num_rows();
    }

    public function get_profiles($request) {
        $this->db->from(self::T_NAME);
        $this->db->select("profiles.id, profiles.name, profiles.status, profile_status.type");
        $this->get_datatables_query($request);
        $this->db->join("profile_status", "profiles.status = profile_status.id");
        $this->db->limit($request['length'], $request['start']);

        $results = $this->db->get()->result_array();
        $totalCounts = $this->get_count_all();
        $filteredCounts = $this->get_count_filtered($request);
        return array(
            'draw' => intval($request['draw']),
            'recordsTotal' => intval($totalCounts),
            'recordsFiltered' => intval($filteredCounts),
            'data' => $results
        );
    }
}