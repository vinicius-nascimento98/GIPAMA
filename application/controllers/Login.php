<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
		$this->load->helper('form');
        $this->load->library("session");
        $this->load->model('ValidaLogin_model','valida');
    }

    public function index(){
        
        if($this->session->has_userdata('nome') && $this->session->has_userdata('id')){
            $this->load->view('welcomeUser_view');
        }
        else{
            $this->load->view('login_view');
        }
    }

    public function login_submit(){
       
        //pegando dados submetidos do formulário
		$param['email'] = $this->input->post('usuario'); 
        $param['senha'] = $this->input->post('senha');

        if($param['email'] != '' && $param['senha'] != ''){
            $this->valida_login($param);
        }
        else{
            $this->session->set_flashdata("message","Por favor preencha os campos obrigatórios!");
            $this->session->set_flashdata("color","danger");
            redirect('Login');
        }
    }

    protected function valida_login($dados){
        
        //passando os dados para o model
		if($dados_valid = $this->valida->select($dados)){
            
            $vetor = array(
                "id"=>$dados_valid[0]['CPF'],
                "nome"=>$dados_valid[0]['nome'],
                "papel"=>$dados_valid[0]['cod_papel']
            );

            //setando sessão
            $this->session->set_userdata($vetor);
            
            switch ($vetor['papel']) {
                
                //caso o papel for igual a 1 ele é o administrador
                case 1:
                    $this->load->view('welcomeRoot_view');
                    break;

                //caso o papel for igual a 2 ele é o usuario
                case 2:
                    $this->load->view('welcomeUser_view');
                    break;
                
                default:
                    redirect('login');
                    break;
            }
        }
        else{
            $this->session->set_flashdata("message","Usuario não encontrado. Por favor verifique os dados informados!");
            $this->session->set_flashdata("color","danger");
            redirect('Login');
        }

    }

    public function logout(){
        
        $this->session->sess_destroy();
        redirect('Login');
    }

}
?>