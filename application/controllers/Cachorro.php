<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cachorro extends CI_Controller {

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
	 * map to /index___.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->library("pagination");
		$this->load->model('cachorros_model');
		$data['mainpage'] = 'puppies';

		$config = array();
		$config["base_url"] = base_url() . "cachorro";
		$config["total_rows"] = $this->cachorros_model->get_count();
		$config["per_page"] = 4;
		$config["uri_segment"] = 2;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data["links"] = $this->pagination->create_links();

		$data['cachorros'] = $this->cachorros_model->getAllByPage($config["per_page"], $page);

		$this->load->view('puppies', $data);
	}

}
