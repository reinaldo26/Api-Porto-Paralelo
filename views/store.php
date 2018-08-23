<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="shortcut icon" href="img/favicon.jpg"/>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/store.css"/>
</head>
<body>

	<img src="<?php echo BASE_URL; ?>/img/loading.gif" id="loading"/>
	<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>/img/return.png" class="return"/></a>

	<div class="container details" data-id="<?php echo $id; ?>">
		<div class="row">
			<div class="col-lg-6 col-xl-5 image-store"></div>
			
			<div class="col-lg-6 col-xl-7 store-details">
				<h3 class="title-store"></h3>
				<span class="slogan"></span><br/>
				<p class="description"></p>
				<span class="area"></span>
				<span class="category"></span>
			</div>
		</div>

		<div class="row info-store">
			<div class="col-lg-6 col-xl-5">
				<div class="gallery">
					<div class="gallery-itens"></div>
				</div>
				<div class="week-days">
					<table class="week-table table">
						<tr class="table-active"><th colspan="7">Horário de Funcionamento</th></tr>

						<tr class="table-light">
							<td>Domingo</td><td>Segunda</td><td>Terça</td><td>Quarta</td><td>Quinta</td><td>Sexta</td><td>Sábado</td>
						</tr>

						<tr class="table-light week">
							<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="col-lg-6 col-xl-7">
				<div class="info-map">
					<iframe allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>		
<script src="<?php echo BASE_URL; ?>/js/store.js"></script>
</body>
</html>