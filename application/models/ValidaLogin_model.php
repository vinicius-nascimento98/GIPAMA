<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ValidaLogin_model extends CI_Model {

	public function __construct(){

		parent::__construct();

		//carregando o banco de dados
		$this->load->database();
	}

	public function select($user){

        $resultado = $this->db->select("CPF,nome,cod_papel")
                    ->where("email", $user['email'])
                    ->where("senha", $user['senha'])
                    ->get("usuario");

        if($resultado->num_rows() != 0){

            $user_valid = $resultado->result_array();

            return $user_valid;
        }
        else{

            return FALSE;
        }

    
    }
    
}