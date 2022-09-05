<?php
class Admin_m extends CI_Model {
    const T_NAME = "admin";

    public function login_check($userInfo) {
        $result = $this->db->get_where(self::T_NAME, array(
            "email" => $userInfo["email"], 
            "password" => md5($userInfo["password"])
        ));
        if ($result->num_rows()) {
            return $result->row_array();
        } else {
            return false;
        }
    }

    public function get_admin_by_id($id) {
        $result = $this->db->get_where(self::T_NAME, array("id" => $id))->row_array();
        return $result;
    }

    public function profile_edit($profile) {
        $this->db->update(self::T_NAME, $profile, ["id" => $this->session->userdata("id")]);
        return $this->get_admin_by_id($this->session->userdata("id"));
    }

    public function password_change($pwd) {
        return $this->db->update(self::T_NAME, ["password" => md5($pwd)], ["id" => $this->session->userdata("id")]);
    }
}