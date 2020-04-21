<?php

	class CategoryModel extends CI_Model {
		
		public function getCategory() {
			return $this->db->get('orkney10_konektron_cli.category')->result();
		}

		public function getCategoryId($id_category) {
			return $this->db->get_where('orkney10_konektron_cli.category', array('id_category' => $id_category))->row();
		}

		public function insertCategory($category) {
			$this->db->insert('orkney10_konektron_cli.category', $category);
			return $this->db->affected_rows() > 0 ? $this->db->insert_id() : 0;
		}

		public function patchCategory($id_category, $category) {
			$this->db->where('id_category', $id_category);
			$this->db->update('orkney10_konektron_cli.category', $category);
			return $this->db->affected_rows() > 0;
		}

		public function delCategory($id_category) {
			$this->db->where('id_category', $id_category);
			$this->db->delete('orkney10_konektron_cli.category');
			return $this->db->affected_rows() > 0;
		}
	}
