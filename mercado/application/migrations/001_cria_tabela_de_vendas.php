<?php
	class  Migration_cria_tabela_de_vendas extends CI_migration{
		public funtion up(){
			$this->dbforge->add_field(array(
				'id' => array(
					'type' => 'INT',
					'auto_increment' => true
				),
				'produto_id' => array(
					'type' => 'INT'
				),
				'comprador_id' => array(
					'type' => 'INT'
				),
				'data_de_entrega' =>array(
					'type' => 'DATE'
				)
			))
			$this->dbforge->create_table('vendas');
		}
	}