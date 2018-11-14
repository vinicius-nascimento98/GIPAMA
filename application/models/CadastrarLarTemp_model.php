<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarLarTemp_model extends CI_Model {

	public function __construct(){

		parent::__construct();

		//carregando o banco de dados
		$this->load->database();
	}

	public function insert($registro){

        //montando vetor para inserir na tabela lar_temp
        foreach ($registro as $i => $v) {
            
            if($i != 'n_telefone_lar_temp'){
                
                if($i == 'usuario_resp'){
                    $v == 'sim' ? $v=1 : $v=0;
                }
                
                $lar_temp[$i] = $v;
            }
            else{
                $tel_lar_temp = $v;
                break;
            }

        }
        
        //montando vetores das tabelas responsável e telefone_responsavel
        if($registro['usuario_resp'] != 'sim'){
                
            $resp['nome'] = $registro['nome'];
            $tel_resp = $registro['n_telefone_responsavel'];
        }

        $this->db->trans_strict(TRUE);

        //montando as query's de inserção do banco de dados e suas transações
        $this->db->trans_start(); 
            $this->db->insert('lar_temp',$lar_temp);
            $id_lar_temp = $this->db->select_max('id')
                ->get('lar_temp')
                -> result_array();

            $this->db->query("INSERT INTO telefone_lar_temp (`n_telefone`,`cod_lar_temp`) VALUES ('$tel_lar_temp',".$id_lar_temp[0]['id'].")");
            
            if(!$lar_temp['usuario_resp']){

                $this->db->insert('responsavel',$resp);
                $id_resp = $this->db->select_max('id')
                    ->get('responsavel')
                    -> result_array();

                $this->db->query("INSERT INTO telefone_responsavel (`n_telefone`,`cod_responsavel`) VALUES ('$tel_resp',".$id_resp[0]['id'].")");
                $this->db->query("INSERT INTO lar_temp_resp (`cod_responsavel`, `cod_lar_temp`) VALUES (".$id_resp[0]['id'].",".$id_lar_temp[0]['id'].")");
            }
        $this->db->trans_complete();

        if($this->db->trans_status() === FALSE){ 
            log_message('ERROR',"Ocorreu algum problema na execução das Transações entre as tabelas!");
            return FALSE;
        }
        else{
            return TRUE;
        }
		
    }
    
}