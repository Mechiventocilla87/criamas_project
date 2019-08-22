<?php


class Cachorros extends CI_Controller
{
	/**
	 * Se llama http://localhost/criamas/index.php/Cachorro/saludar
	 */
    public function saludar(){
    	$this->load->model('Cachorros_Model','CM',true);
    	$datos["Cachorros"] = $this->CM->getAll();
    	$this->load->view('cachorroSaludo.php', $datos);
	}
}
