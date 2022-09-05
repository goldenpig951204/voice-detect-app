<?php
    class Setting extends MY_Controller {
        public function index() {
            $data['styles'] = array('css/pages/setting.css');
            $data['scripts'] = array('js/pages/setting.js');

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('pages/setting');
            $this->load->view('templates/footer', $data);
        }

        public function update_setting() {
            $setting = $this->input->post();
            $photoExist = $_FILES['photo'];
            if (!empty($photoExist)) {
                $fileName = uniqid() . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); 
                $config['upload_path'] = './uploads/users';
                $config['allowed_types'] = 'git|jpg|png|bmp';
                $config['file_name'] = $fileName;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                    $this->session->set_flashdata("error_message", $this->upload->display_errors());
                } else {
                    $setting["photo"] = $fileName;
                    $this->admin_m->update_setting($setting);
                    $this->session->set_userdata(array('photo' => $fileName));
                }
            } else {
                $this->admin_m->update_setting($setting);
            }
            redirect('setting');
        }

        public function change_password() {
            $data = $this->input->post();
            $password = $data['new_password'];
            $confirm = $data['confirm_password'];
            if (empty($password)) {
                $this->session->set_flashdata('error_message', 'The password field can be not empty.');
            } else if ($password != $confirm) {
                $this->session->set_flashdata('error_message', 'The password field should be same with the confirm password field.');
            } else {
                $this->admin_m->update_password($password);
            }
            redirect('setting');
        }
    }