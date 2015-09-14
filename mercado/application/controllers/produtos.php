<?php
	class Produtos extends CI_Controller{

		public function index(){
			
			//$this->output->enable_profiler(true);

			$this->load->model('produtos_model');
			$produtos = $this->produtos_model->buscaTodos();

			$dados = array('produtos' => $produtos);
			$this->load->helper(array('currency'));
			$this->load->view('produtos/index.php', $dados);
		}

		public function formulario(){
			$this->load->view('produtos/formulario');
		}

		public function novo(){
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$produto = array(
				'nome' => $this->input->post('nome'),
				'descricao' => $this->input->post('descricao'),
				'preco' => $this->input->post('preco'),
				'usuario_id' => $usuarioLogado['id']
			);
			$this->load->model('produtos_model');
			$this->produtos_model->salva($produto);
			$this->session->set_flashdata('success', 'Produto salvo com sucesso.');
			redirect('/');
		}

		public function mostra($id){
			$this->load->model('produtos_model');
			$produto = $this->produtos_model->busca($id);
			$dados = array('produto' => $produto);
			$this->load->helper('typography');
			$this->load->view('produtos/mostra', $dados);
		}
	}