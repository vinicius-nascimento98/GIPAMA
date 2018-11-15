<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarLarTemp extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('CadastrarLarTemp_model','cad_lar_temp');
    }

    public function index(){
        $this->load->view('cadastrarLarTemp_view');
    }

    public function submit_lar_temp(){

		//pegando dados submetidos do formulário
		$param['qtde_animais']=$this->input->post('qtdAnimais');
		$param['tipo_animal']=$this->input->post('tipoAnimais');
		$param['rua']=$this->input->post('endereco');
		$param['avenida']=$this->input->post('endereco');
		$param['numero']=$this->input->post('numeroEnd');
		$param['cep']=$this->input->post('cep');
		$param['cidade']=$this->input->post('cidade');
		$param['estado']=$this->input->post('estado');
		$param['complemento']=$this->input->post('complemento');
		$param['usuario_resp']=$this->input->post('responsavel');
		$param['cod_usuario']=1234567898; //aqui deve ser colocado a sessão com o id do usuario
		$param['n_telefone_lar_temp']=$this->input->post('telefoneLocal');
		$param['nome']=$this->input->post('nomeCompletoResponsavel');
		$param['n_telefone_responsavel']=$this->input->post('telefoneResponsavel');

		//passando dados para o método de inserção no banco de dados
		$this->inserir_lar_temp($param);
		
	}

    protected function inserir_lar_temp($dados){

		//passando os dados para o model
		if($this->cad_lar_temp->insert($dados)){
			echo "Inserido com sucesso!";//implementar tela de alerta
		}
		else{
			echo "Erro!"; //implementar tela de alerta
		}

    }
}
?>