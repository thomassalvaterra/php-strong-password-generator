<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form PHP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
</head>

<body class="bg-primary">
	<header class="text-center pt-5 pb-3">
		<h1 class="text-body-tertiary">Strong Password Generator</h1>
		<h2>Genera una password sicura</h2>
	</header>
	<main class="container bg-white p-5 rounded">
		<div class="row">
			<div class="col-6">Lunghezza Password:</div>
			<div class="col-6">
				<form action="password.php">
					<input id="psw-length" type="number" name="passwordLength" class="me-5">
					<button type="submit" class="btn btn-primary">Invia</button>
					<button type="button" class="btn btn-secondary">Annulla</button>
				</form>
			</div>
			<br><br>
		</div>
		<div class="row">
			<div class="col-6">Consenti ripetizioni di uno o più caratteri</div>
			<div class="col-6">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					<label class="form-check-label" for="flexRadioDefault1">
						Si
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
					<label class="form-check-label" for="flexRadioDefault2">
						No
					</label>
				</div>
				<br><br>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
						Lettere
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
						Numeri
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
					<label class="form-check-label" for="flexCheckDefault">
						Simboli
					</label>
				</div>
				<br><br>
			</div>
		</div>
	</main>
</body>

</html>