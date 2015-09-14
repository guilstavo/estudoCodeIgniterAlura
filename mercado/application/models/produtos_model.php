<?php
	class Produtos_model extends CI_Model{

		public function busca($id){
			return $this->db->get_where('produtos', array(
				"id" => $id
			))->row_array();
		}

		public function buscaTodos(){
			return $this->db->get('produtos')->result_array();
		}

		public function salva($produto){
			$this->db->insert('produtos', $produto);
		}

		public function buscaTodosNaoVendidos(){
			return $this->db->get_where('produtos', array(
				'vendido' => false
			))->result_array();
		}
		
		public function buscaVendidos($usuario){
			$id = $ususario['id'];
			$this->db->where('vendido', true);
			$this->db->where('usuario_id', $id);
			return $this->db->get('produtos')->result_array();
		}
	}