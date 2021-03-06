<?php

	class ProfileModel extends CI_Model {
		
		public function getProfile() {
			return $this->db->get('orkney10_konektron_cli.profiles')->result();
		}

		public function getProfileId($id_profile) {
			return $this->db->get_where('orkney10_konektron_cli.profiles', array('id_profile' => $id_profile))->row();
		}

		public function getProfileUsers($id_users) {
			return $this->db->get_where('orkney10_konektron_cli.profiles', array('id_users' => $id_users))->row();
		}

		public function insertProfile($profile) {
			$this->db->insert('orkney10_konektron_cli.profiles', $profile);
		}

		public function patchProfile($id_profile, $profile) {
			$this->db->where('id_profile', $id_profile);
			$this->db->update('orkney10_konektron_cli.profiles', $profile);

			if($this->db->affected_rows() > 0) {
				return $id_profile;
			} 
			return NULL;
		}

		public function delProfile($id_profile) {
			$this->db->where('id_profile', $id_profile);
			$this->db->delete('orkney10_konektron_cli.profiles');
		}
	}
