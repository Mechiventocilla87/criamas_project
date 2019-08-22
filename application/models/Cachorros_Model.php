<?php


class Cachorros_Model extends CI_Model
{
	public function getAll(){
      $result= $this->db->get ('cachorros');
      $cachorros = $result->result_array();
      return $cachorros;
    }

}
