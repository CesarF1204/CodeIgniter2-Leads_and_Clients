<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead_and_Clients extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->model('Lead_and_Client');
		$get_each_client = $this->Lead_and_Client->get_client_with_leads();
		$this->load->view('lead_and_clients/index.php', array('get_each_client' => $get_each_client));
	}
}
