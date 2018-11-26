<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legislacao extends CI_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('legislacao_view');
    }
}
?>