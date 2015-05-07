<?php

class Login_model extends CI_Model {

	function validate_admin() 
	{
		$this->db->where('user_name', $this->input->post('user_name'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('ADMIN');

		if($query->num_rows == 1) {
			return true;
		}
	}

	function validate_member() {
		$this->db->where('user_name', $this->input->post('user_name'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('MEMBER_REGULAR');

		if($query->num_rows == 1) {
			return true;
		}
	}

		function get_id($un) {
		$q = $this->db->query("SELECT member_id FROM MEMBER_REGULAR WHERE user_name = '$un'"); 

		if ($q->num_rows == 1) {
			foreach ($q->result() as $row) {
				$data = $row->member_id;
			}

			return $data;
		}
	}
}