<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('pages/login');
    }

    public function check() {
        $userInfo = $this->input->post();
        $result = $this->admin_m->login_check($userInfo);
        if ($result) {
            $this->session->set_userdata(array(
                "id" => $result["id"],
                "name" => $result["name"],
                "email" => $result["email"],
                "photo" => $result["photo"],
                "isLogged" => true
            ));
            redirect("dashboard");
        } else {
            $this->session->set_flashdata(array("error" => "User information does not appear to be correct."));
            redirect("login");
        }
    }

    public function logout() {
        $this->session->unset_userdata(["id", "name", "email", "photo", "isLogged"]);
        redirect("login");
    }
}