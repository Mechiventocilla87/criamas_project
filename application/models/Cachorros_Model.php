<?php


class Cachorros_Model extends CI_Model
{
	protected $table = 'cachorros';

	public function __construct() {
		parent::__construct();
	}

	public function getAll(){
      $result= $this->db->get('cachorros');
      $cachorros = $result->result_array();
      return $cachorros;
    }

	public function get_count() {
		return $this->db->count_all($this->table);
	}

	public function getAllByPage($limit, $start){
		$this->db->limit($limit, $start);
		$result= $this->db->get($this->table);
		$cachorros = $result->result_array();
		return $cachorros;
	}

}
