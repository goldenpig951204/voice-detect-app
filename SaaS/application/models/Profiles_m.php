<?php
class Profiles_m extends CI_Model {
    public function insert_profile($profile) {
        $this->db->insert("profiles", $profile);
        return $this->db->insert_id();
    }

    public function get_datatable_profiles($request) {
        $draw = $request['draw'];
        $offset = $request['start'];
        $limit = $request['length'];
        $order = $request['order'][0];
        $search = $request['search']['value'];
        $columns = array('id', 'name', 'status');

        $totalCounts = $this->db->from('profiles')
            ->count_all_results();
        
        $query = $this->db->from("profiles")
            ->select('profiles.*, profile_status.type')
            ->group_start()
            ->like('profiles.id', $search)
            ->or_like('profiles.name', $search)
            ->or_like('profiles.status', $search)
            ->group_end()
            ->join('profile_status', 'profile_status.id=profiles.status')
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

    public function get_profile_by_id($id) {
        return $this->db->get_where('profiles', ["id" => $id])->row_array();
    }

    public function set_profile_permission($id, $status) {
        if ($status < 3) {
            $result = $this->db->update("profiles", array("status" => $status), array("id" => $id));
        } else {
            $result = $this->db->delete("profiles", array("id" => $id));
        }
        return $result;
    }
} 