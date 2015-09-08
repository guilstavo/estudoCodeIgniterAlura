<html>
	<head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
	<body>
		<div class="container">
		<h1><?= $produto['nome']?></h1>
		Preço: <?= $produto['preco']?><br>
		<?= auto_typography($produto['descricao'])?><br>
		</div>
	</body>
</html>