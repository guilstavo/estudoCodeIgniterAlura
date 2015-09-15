	<h1>Cadastro de Novo Produto</h1>

	<!--<?= validation_errors('<p class ="alert alert-danger">', '</p>'); ?>-->
<?php
	echo form_open('produtos/novo');
	echo form_label('Nome', 'nome');
	echo form_input(array(
		'name' => 'nome',
		'class' => 'form-control',
		'id' => 'nome',
		'maxlenght' => '255',
		'value' => set_value('nome', '')
	));
	echo form_error('nome');
	echo form_label('Preço', 'preco');
	echo form_input(array(
		'name' => 'preco',
		'class' => 'form-control',
		'id' => 'nome',
		'maxlenght' => '255',
		'type' => 'number',
		'value' => set_value('preco', '')
	));
	echo form_error('preco');
	echo form_label('Descrição', 'descricao');
	echo form_textarea(array(
		'name' => 'descricao',
		'class' => 'form-control',
		'id' => 'descricao',
		'value' => set_value('descricao', '')
	));
	echo form_error('descricao');
	echo form_button(array(
		'class' => 'btn btn-primary',
		'content' => 'Cadastrar',
		'type' => 'submit'
	));
	echo form_close();
?>