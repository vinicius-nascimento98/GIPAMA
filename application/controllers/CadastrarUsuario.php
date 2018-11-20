<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarUsuario extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('CadastrarUsuario_model','cad_usuario');
		$this->load->library("session");
    }

    public function index(){
        $this->load->view('login_view');
    }

    public function submit_usuario(){

		//pegando dados submetidos do formulário
		
		$param['nome'] = $this->input->post('nome'); 
		$param['cpf'] = $this->input->post('cpf'); 
		$param['rg'] = $this->input->post('rg'); 
		$param['cidade'] = $this->input->post('cidade'); 
		$param['estado'] = $this->input->post('estado'); 
		$param['data_nasc'] = $this->input->post('data_nasc'); 
		$param['tel1'] = $this->input->post('tel1'); 
		$param['tel2'] = $this->input->post('tel2'); 
		$param['tel3'] = $this->input->post('tel3'); 
		$param['senha'] = $this->input->post('senha'); 
		$param['email'] = $this->input->post('email'); 
		$param['telefone']=$this->input->post('telefoneLocal');

		//passando dados para o método de inserção no banco de dados
		$this->inserir_usuario($param);
		
	}

    protected function inserir_usuario($dados){

		//passando os dados para o model
		if($this->cad_usuario->insert($dados)){
			$this->session->set_flashdata("message","Inserido com sucesso!");//implementar tela de alerta
			$this->session->set_flashdata("color","success");
			redirect('login_view');
		}
		else{
			$this->session->set_flashdata("message","Ops! Ocorreu um problema. Tente novamente mais tarde!"); //implementar tela de alerta
			$this->session->set_flashdata("color","danger");
			redirect('login_view');
		}

    }
}
?>