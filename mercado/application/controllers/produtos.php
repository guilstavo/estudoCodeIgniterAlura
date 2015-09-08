<?php
	class Produtos extends CI_Controller{

		public function index(){
			
			//$this->output->enable_profiler(true);

			$this->load->model('produtos_model');
			$produtos = $this->produtos_model->buscaTodos();

			$dados = array('produtos' => $produtos);
			$this->load->helper(array('url', 'currency', 'form'));
			$this->load->view('produtos/index.php', $dados);
		}
	}