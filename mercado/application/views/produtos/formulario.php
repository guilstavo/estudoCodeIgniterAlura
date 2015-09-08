
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap') ?>">
</head>
<body>
	<div class="container">
	<?php

		echo form_open('produtos/novo');
		echo form_label('Nome', 'nome');
		echo form_input(array(
			'nome' => 'nome',
			'class' => 'form-control',
			'id' => 'nome',
			'maxlenght' => '255'
		));
		echo form_label('Preço', 'preco');
		echo form_input(array(
			'nome' => 'preco',
			'class' => 'form-control',
			'id' => 'nome',
			'maxlenght' => '255',
			'type' => 'number'
		));
		echo form_label('Descrição', 'descricao');
		echo form_textarea(array(
			'name' => 'descricao',
			'class' => 'form-control',
			'id' => 'descricao'
		));
		echo form_button(array(
			'class' => 'btn btn-primary',
			'content' => 'Cadastrar',
			'type' => 'submit'
		));
		echo form_close();

	?>
	</div>
</body>
</html>