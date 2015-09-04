<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap">
</head>
<body>
	<div class="container"></div>
		<h1>Produtos</h1>
		<table class="table">
			<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?= $produto['nome']; ?></td>
				<td><?= $produto['preco']; ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>