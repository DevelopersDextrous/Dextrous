<?php

class Login extends CI_Controller {

	function validate_credentials() {
		$uri = $_POST['uri'];
		// echo $uri;
		// die();
		// echo $_POST['user_name']. " ". $_POST['password'] ;
		
		$this->load->model('login_model');
		$query = $this->login_model->validate_admin();
		// $uri = base_url().$_SERVER['REQUEST_URI'];
		// echo $uri;
		// die();
		


		if($query) {

			$data = array(
				'status' => 'Admin',
				'user_name' => $this->input->post('user_name'),
				'is_logged_in_admin' => true,
				'admin_id' => $admin_id
				);

			$this->session->set_userdata($data);

			redirect($uri);
		}

		else {
			$this->load->model('login_model');
			$q = $this->login_model->validate_member();

			if($q) {

				
				$mem_id = $this->login_model->get_id($this->input->post('user_name'));

				$data = array(
					'status' => 'Member',
					'user_name' => $this->input->post('user_name'),
					'member_id' => $mem_id,
					'is_logged_in_member' => true
				);

				$this->session->set_userdata($data);
				redirect($uri);
				//$this->login_successful();
			}
			else{
				 redirect($uri);
			}

		}

	}

	function logout()
	{

		$uri = $_GET['uri'];
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect($uri);
	}
}