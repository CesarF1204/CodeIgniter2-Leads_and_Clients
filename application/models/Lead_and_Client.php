<?php
	class Lead_and_Client extends CI_Model {
		public function get_client_with_leads() {
			$query = "SELECT CONCAT(clients.first_name, ' ', clients.last_name) as client_name, count(*) as number_of_leads FROM leads
					LEFT JOIN sites ON leads.site_id = sites.site_id
					LEFT JOIN clients ON sites.client_id = clients.client_id
					GROUP BY client_name
					ORDER BY client_name ASC";
			return $this->db->query($query)->result_array();
		}
	}
?>