<?php

	class StockServicesModel extends CI_Model {
		
		public function getStockServices() {
			return $this->db->get('orkney10_konektron_cli.services')->result();
		}

		public function getStockServicesId($id_service) {
			return $this->db->get_where('orkney10_konektron_cli.services', array('id_service' => $id_service))->row();
		}

		public function insertStockServices($stockServices) {
			$this->db->insert('orkney10_konektron_cli.services', $stockServices);
		}

		public function patchStockServices($id_service, $stockServices) {
			$this->db->where('id_service', $id_service);
			$this->db->update('orkney10_konektron_cli.services', $stockServices);

			if($this->db->affected_rows() > 0) {
				return $id_service;
			} 
			return NULL;
		}

		public function delStockServices($id_service) {
			$this->db->where('id_service', $id_service);
			$this->db->delete('orkney10_konektron_cli.services');
		}
	}
