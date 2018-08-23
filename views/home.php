<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Porto Paralelo Api</title>
	<link rel="shortcut icon" href="img/favicon.jpg"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<div class="form-group">
   	 <input type="text" class="form-control" id="search" placeholder="Procurando uma loja especifica?"/>
   	 <input type="submit" class="form-control alert-dark" id="search-sub" value="Pesquisar"/>
</div>

<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>/img/return.png" class="return"/></a>

<div class="alert alert-danger"></div>

<div class="container">
 	<img src="<?php echo BASE_URL; ?>/img/loading.gif" id="loading"/>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/js/script.js"></script>
</body>
</html>
