<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= esc($titulo) ?></title>
	<style>
	body{
	font-family: Arial, sans-serif;
	text-align: center;
	background-color: #f4f4f4;
	margin-top: 100px;
	}

	h1{
	color: #2563eb;
	}

	p{
	font-size: 18px;
	}
	</style>
</head>
<body>
	<h1><?= esc($titulo) ?></h1>

	<p><?= esc($mensaje) ?></p>

	<p>Framework en CodeIgniter 4 | Patrn MVC</p>
</body>
</html>
