    <?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class CadastrarUsuario_model extends CI_Model {

        public function __construct(){

            parent::__construct();

            //carregando o banco de dados
            $this->load->database();
        }

        public function insert($registro){

            //montando vetor para inserir na usuario
            foreach ($registro as $i => $v) {
                
                if($i != 'tel1'){
                    
                    if($i == 'cod_papel'){

                        $v=2;
                    }

                    $user[$i] = $v;
                }
                else{
                    break;
                }

            }
            
            //montando vetores das tabelas usuario e telefone_usuario
            $registro['tel1'] != "" ? $tel1= $registro['tel1'] : $tel1= null;
            $registro['tel2'] != "" ? $tel2= $registro['tel2'] : $tel2= null;
            $registro['tel3'] != "" ? $tel3= $registro['tel3'] : $tel3= null;

            $this->db->trans_strict(TRUE);

            //montando as query's de inserção do banco de dados e suas transações
            $this->db->trans_start(); 
                $this->db->insert('usuario',$user);
                $id_user = $user['cpf'];

                $tel1 != null ? $this->db->query("INSERT INTO telefone_usuario (`n_telefone`,`cod_usuario`) VALUES ('$tel1','".$id_user."')") : $tel1 = "";
                $tel2 != null ? $this->db->query("INSERT INTO telefone_usuario (`n_telefone`,`cod_usuario`) VALUES ('$tel2','".$id_user."')") : $tel2 = "";
                $tel3 != null ? $this->db->query("INSERT INTO telefone_usuario (`n_telefone`,`cod_usuario`) VALUES ('$tel3','".$id_user."')") : $tel3 = "";
    
            $this->db->trans_complete();

            if($this->db->trans_status() == FALSE){ 
                log_message('ERROR',"Ocorreu algum problema na execução das Transações entre as tabelas!");
                return FALSE;
            }
            else{
                return TRUE;
            }
            
        }
        
    }