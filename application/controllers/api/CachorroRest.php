<?php

require APPPATH . '/libraries/REST_Controller.php';


class CachorroRest extends REST_Controller{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();

		// Configure limits on our controller methods
		// Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
		$this->methods['cachorros_get']['limit'] = 500; // 500 requests per hour per user/key
		$this->methods['cachorros_post']['limit'] = 100; // 100 requests per hour per user/key
		$this->methods['cachorros_delete']['limit'] = 50; // 50 requests per hour per user/key
	}

	/***
	 *
	 */
	public function cachorros_get(){
		$this->load->model('Cachorros_Model','CM',true);
		$cachorros= $this->$this->CM->getAll();
		if ($cachorros){
			$this->response($cachorros, REST_Controller::HTTP_OK);
		}

	}

}
