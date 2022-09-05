<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$data['styles'] = array();
		$data['scripts'] = array();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/sidebar.php');
		$this->load->view('pages/dashboard.php');
		$this->load->view('templates/footer.php', $data);
	}
}
