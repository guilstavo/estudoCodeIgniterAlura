<?php
	class Produtos extends CI_Controller{

		public function index(){
			$produtos = array();
			$bola = array('nome' => 'Bola de Futebol','Descricao' => 'Bola de Futebol Assinada Pelo Zico', 'preco' => 300);
			$hd = array('nome' => 'HD externo usado', 'descricao' => 'Marca Hega-HD 300 Teras, comprado em 1997', 'preco' => 400);

			array_push($produtos, $bola, $hd);
			$dados = array('produtos' => $produtos);
			$this->load->view('produtos/index.php', $dados);
		}
	}