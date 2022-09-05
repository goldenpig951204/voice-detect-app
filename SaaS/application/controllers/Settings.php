<?php
class Settings extends MY_Controller {
    public function index() {
        $data['styles'] = array(
            "styles/pages/settings.css"
        );
        $data['scripts'] = array(
            "plugins/vendor_plugins/input-mask/jquery.inputmask.js",
            "plugins/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js",
            "plugins/vendor_plugins/input-mask/jquery.inputmask.extensions.js",
            "scripts/pages/settings.js"
        );
        $data['countries'] = json_decode(file_get_contents(base_url('assets/scripts/global/countries.json')), true);
        $data['profile'] = $this->admin_m->get_admin_by_id($this->session->userdata("id"));
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pages/settings');
        $this->load->view('templates/footer', $data);
    }

    public function profile_edit() {
        $profile = $this->input->post();
        $profile['phone'] = preg_replace('/[^0-9]/', '', $profile['phone']);
        $photo = $_FILES['photo'];
        if ($photo["size"] != 0) {
            if ($this->session->userdata("photo")) {
                unlink('./uploads/admin/' . $this->session->userdata('photo'));
            }
            $photoName = uniqid() . '.' . pathinfo($photo['name'], PATHINFO_EXTENSION);
            $config["upload_path"] = './uploads/admin/';
            $config["allowed_types"] = 'git|png|jpg|bmp';
            $config["file_name"] = $photoName;

            $this->load->library("upload", $config);
            if (!$this->upload->do_upload("photo")) {
                $this->session->set_flashdata("error", $this->upload->display_errors());
                redirect("settings");
            } else {
                $profile['photo'] = $photoName;
            }
        }
        try {
            $result = $this->admin_m->profile_edit($profile);
            $this->session->set_userdata([
                "id" => $result['id'],
                "name" => $result['name'],
                "email" => $result['email'],
                "photo" => $result['photo']
            ]);
            redirect("settings");
        } catch (Exception $e) {
            $this->session->set_flashdata("error", $e->getMessage());
            redirect("settings");
        }
    }

    public function password_change() {
        $request = $this->input->post();
        if ($request["new_password"] == "") {
            $this->session->set_flashdata("You should insert the new password field.");
        } else if ($request["confirm_password" == ""]) {
            $this->session->set_flashdata("You should insert the confirm password field.");
        } else if ($request["new_password"] != $request["confirm_password"]) {
            $this->session->set_flashdata("The new password field should be same with the confirm password field.");
        } else {
            $this->admin_m->password_change($request["new_password"]);
        }
        redirect("settings");
    }
}