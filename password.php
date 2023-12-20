<?php
function generateRandomString($length)
{
	return substr(str_shuffle(str_repeat($x = '!.,$%&/()&/0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890', ceil($length / strlen($x)))), 1, $length);
}
$passwordLength = $_GET["passwordLength"] ?? "Empty";
$msg = "$passwordLength";
$result = generateRandomString($msg);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password Generator</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
</head>

<body class="bg-primary">
	<header class="text-center">
		<h1>Password generator</h1>
	</header>
	<main>
		<div class="container">
			<div class="card p-5">
				<h1>La tua password è: <?php echo $result ?></h1>
				<a href="form.php">Genera nuova Password</a>
			</div>
		</div>
	</main>
</body>

</html>