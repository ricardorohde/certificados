<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Certificados extends CI_Controller {
      /**
     * author: Leandro  
     * email: leandro.jsilveira@fatec.sp.gov.br
     */
    
    public function __construct() {
        parent::__construct();
        $this->load->model('certificados_model','',TRUE);
        
    }
    public function index() {
        
        
        $this->load->view('tema/menu');
        $this->load->view('tema/header');
        $this->load->view('certificados/pesquisa');
        $this->load->view('tema/footer');
      
    
    }
    public function administrativo() {
       
        $this->data['usuario'] = $this->mapos_model->getById($this->session->userdata('id'));
        $this->data['view'] = 'mapos/minhaConta';
        $this->load->view('tema/topo',  $this->data);
     
    }
    
    public function pesquisar() {
               
        $termo = $this->input->get('termo');
        $data['results'] = $this->certificados_model->pesquisar($termo);
        $this->data['certificados'] = $data['results']['certificados'];
        $this->data['view'] = 'certificados/resultado';
        $this->load->view('tema/menu');
        $this->load->view('tema/header');
        $this->load->view('certificados/resultado',  $this->data);
        $this->load->view('tema/footer');
        
    
      
    }
    
}