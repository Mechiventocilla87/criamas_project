<?php

require APPPATH . 'libraries/REST_Controller.php';


class CachorroRest extends REST_Controller{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->database();
	}
	
	/***
	 * @param int $id
	 *  Busqueda por id : GET: localhost/criamas/index.php/api/CachorroRest/1
	 *  Busqueda todos: GET: localhost/criamas/index.php/api/CachorroRest
	 */
	public function index_get($id = 0)
	{
		if(!empty($id)){
			$data = $this->db->get_where("cachorros", ['id' => $id])->row_array();
		}else{
			$data = $this->db->get("cachorros")->result();
		}

		$this->response($data, REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	 *  save: POST: localhost/criamas/index.php/api/CachorroRest (data en formdata)
	 * @return Response
	 */
	public function index_post()
	{
		$input = $this->input->post();
		$this->db->insert('cachorros',$input);

		$this->response(['Cachorro created successfully.'], REST_Controller::HTTP_OK);
	}

	/**
	 * Get All Data from this method.
	 * *  save: PUT: localhost/criamas/index.php/api/CachorroRest (data en formdata)
	 * @return Response
	 */
	public function index_put($id)
	{
		$input = $this->put();
		$this->db->update('cachorros', $input, array('id'=>$id));

		$this->response(['Cachorro updated successfully.'], REST_Controller::HTTP_OK);
	}


	/**
	 * Get All Data from this method.
	 * *  eliminar: DELETE: localhost/criamas/index.php/api/CachorroRest/1
	 * @return Response
	 */
	public function index_delete($id)
	{
		$this->db->delete('cachorros', array('id'=>$id));

		$this->response(['Cachorro deleted successfully.'], REST_Controller::HTTP_OK);
	}

}
