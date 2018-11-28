<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarLarTemp extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('CadastrarLarTemp_model','cad_lar_temp');
		$this->load->library("session");
    }

    public function index(){
        $this->load->view('cadastrarLarTemp_view');
    }

    public function submit_lar_temp(){

		//pegando dados submetidos do formulário
		$param['qtde_animais']=$this->input->post('qtdAnimais');
		$param['tipo_animal']= $this->input->post('tipoAnimais') == 'animaisSilvestres' ? 'animais silvestres' : $this->input->post('tipoAnimais');
		$param['logradouro']=$this->input->post('endereco');
		$param['numero']=$this->input->post('numeroEnd');
		$param['cep']=$this->input->post('cep');
		$param['cidade']=$this->input->post('cidade');
		$param['estado']=$this->input->post('estado');
		$param['complemento']=$this->input->post('complemento') == '' ? null : $this->input->post('complemento');
		$param['usuario_resp']=$this->input->post('responsavel');
		$param['cod_usuario']=$this->session->userdata('id'); //aqui deve ser colocado a sessão com o id do usuario
		$param['telefone'] = $this->input->post('telefoneLocal');
		
		//laço de repetição para recuperar os telefones do responsável e os nomes
		foreach($this->input->post() as $i => $v){
			
			if(substr($i, 0, 19) == "telefoneResponsavel"){
				$telefone_resp[]= $v;
			}
			else if(substr($i, 0, 23) == "nomeCompletoResponsavel"){
				$responsavel[] = $v;
			}
		}

		$param['telefone_resp'] = $telefone_resp;
		$param['nome_resp'] = $responsavel;

		$this->inserir_lar_temp($param);
		
	}

    protected function inserir_lar_temp($dados){

		//passando os dados para o model
		if($this->cad_lar_temp->insert($dados)){
			$this->session->set_flashdata("message","Inserido com sucesso!");//implementar tela de alerta
			$this->session->set_flashdata("color","success");
			redirect('cadastrarLarTemp');
		}
		else{
			$this->session->set_flashdata("message","Ops! Ocorreu um problema. Tente novamente mais tarde!"); //implementar tela de alerta
			$this->session->set_flashdata("color","danger");
			redirect('cadastrarLarTemp');
		}

    }
}
?>