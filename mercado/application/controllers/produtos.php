<?php
	class Produtos extends CI_Controller{

		public function index(){
			
			//$this->output->enable_profiler(true);

			$this->load->model('produtos_model');
			$produtos = $this->produtos_model->buscaTodosNaoVendidos();

			$dados = array('produtos' => $produtos);
			$this->load->helper(array('currency'));
			$this->load->view('cabecalho.php');
			$this->load->view('produtos/index.php', $dados);
			$this->load->view('rodape.php');
		}

		public function formulario(){
			autoriza();
			$this->load->view('cabecalho.php');
			$this->load->view('produtos/formulario');
			$this->load->view('rodape.php');
		}

		public function novo(){
			$usuarioLogado = autoriza();
			$this->load->library("form_validation");
			$this->form_validation->set_rules('nome', 'nome', 'required|min_length[5]|max_length[100]|callback_nao_tenha_a_palavra_melhor');
			$this->form_validation->set_rules('preco', 'preco', 'required');
			$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]');
			$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");
			$sucesso = $this->form_validation->run();
			if($sucesso){
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
			}else{
				$this->load->view('produtos/formulario');
			}
		}

		public function mostra($id){
			$this->load->model('produtos_model');
			$produto = $this->produtos_model->busca($id);
			$dados = array('produto' => $produto);
			$this->load->helper('typography');
			$this->load->view('cabecalho.php');
			$this->load->view('produtos/mostra', $dados);
			$this->load->view('rodape.php');
		}

		public function nao_tenha_a_palavra_melhor($nome){
			$posicao = strpos($nome, "melhor");
			if($posicao == FALSE){
				return true;
			}else{
				$this->form_validation->set_message('nao_tenha_a_palavra_melhor', 'O campo "%s" não pode conter a palavra "melhor"');
				return false;
			}
		}
	}