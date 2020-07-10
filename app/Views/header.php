<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
	<title>Sistema de Inventário</title>
	<script>
		function confirma() {
			if(!confirm("Confima a exclusão do registros?")){
				return false;
			}
			return true;
		}
	</script>

</head>

<body>
	<header>
		<nav>
			<div class="brand">
				<a href="<?= base_url() ?>">sistema de inventário</a>
			</div>
			<ul class="menu">
				<li><a href="<?= base_url() ?>" <?= (isset($home)) ? "class='active'" : "" ?>>Inicio</a></li>
				<li><a href="<?= base_url() ?>/albuns" <?= (isset($list)) ? "class='active'" : "" ?>>álbuns</a></li>
				<li><a href="<?= base_url() ?>/registar" <?= (isset($add)) ? "class='active'" : "" ?>>Registar</a></li>
			</ul>
		</nav>
	</header>