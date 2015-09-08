<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap') ?>">
</head>
<body>
	<div class="container">

		
		<p class="alert-success"><?= $this->session->flashdata("success"); ?></p>
		<p class="alert-danger"><?= $this->session->flashdata("danger"); ?></p>

		<h1>Produtos</h1>
		<table class="table">
			<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?= $produto['nome']; ?></td>
				<td><?= numeroEmReais($produto['preco']); ?></td>
			</tr>
			<?php endforeach ?>
		</table>
		<?php if($this->session->userdata("usuario_logado")): ?>
			<?= anchor('produtos/formulario', 'Novo Produto', array('class' => 'btn btn-primary')); ?>
			<?= anchor('login/logout', 'Logout', array('class' => 'btn btn-primary')); ?>

		<?php else : ?>

		<h1>Login</h1>
		<?php
			echo form_open('login/autenticar');
			echo form_label("Email", "email");
			echo form_input(array(
				'name' => 'email',
				'id' => 'email',
				'class' => 'form-control',
				'maxlenght' => '255'
				
			));
			echo form_label("Senha", "senha");
			echo form_password(array(
				'name' => 'senha',
				'id' => 'senha',
				'class' => 'form-control',
				'maxlenght' => '255'
				
			));
			echo form_button(array(
				'class' => 'btn btn-primary',
				'content' => 'Login',
				'type' => 'submit'
			));
			echo form_close();
		?>
		<?php endif; ?>
		<h1>Cadastro</h1>
		<?php
			echo form_open('usuarios/novo');
			echo form_label("Nome", "nome");
			echo form_input(array(
				'name' => 'nome',
				'id' => 'nome',
				'class' => 'form-control',
				'maxlenght' => '255'
				
			));
			echo form_label("Email", "email");
			echo form_input(array(
				'name' => 'email',
				'id' => 'email',
				'class' => 'form-control',
				'maxlenght' => '255'
				
			));
			echo form_label("Senha", "senha");
			echo form_password(array(
				'name' => 'senha',
				'id' => 'senha',
				'class' => 'form-control',
				'maxlenght' => '255'
				
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