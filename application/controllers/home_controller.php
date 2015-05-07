<?php

class Home_controller extends CI_Controller {
	
	function index() {
		$this->load->view('home_view');
	}
}