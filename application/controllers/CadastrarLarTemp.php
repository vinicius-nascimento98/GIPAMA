<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarLarTemp extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index(){
        $this->load->view('cadastrarLarTemp_view');
    }

    public function valida_lar_temp(){

		$param['avenida']=$this->input->post('endereco');
		$param['numero']=$this->input->post('numeroEnd');
		$param['complemento']=$this->input->post('complemento');
		$param['cidade']=$this->input->post('cidade');
		$param['estado']=$this->input->post('estado');
		$param['tipoAnimais']=$this->input->post('tipoAnimais');
		$param['responsavel']=$this->input->post('responsavel');
		$param['nomeCompletoResponsavel']=$this->input->post('nomeCompletoResponsavel');
		$param['cep']=$this->input->post('cep');
		$param['telefoneLocal']=$this->input->post('telefoneLocal');
		$param['telefoneResponsavel']=$this->input->post('telefoneResponsavel');
		$param['qtdAnimais']=$this->input->post('qtdAnimais');


	}

    private function inserir_lar_temp(){

    }
}
?>