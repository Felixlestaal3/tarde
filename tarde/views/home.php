<!DOCTYPE html>
<html lang="en">

<head>
	<title>HugoProject</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- External libraries -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" crossorigin="anonymous"></script>
	<script src="https://smtpjs.com/v3/smtp.js"></script>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Firebase libraries -->
	<script defer src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
	<script defer src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>

	<!-- Animaciones -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../res/assets/canvasjs.min.js"></script>
	<script src="../res/assets/jquery.canvasjs.min.js"></script>
	<script src="https://www.paypal.com/sdk/js?client-id=sb&components=buttons,marks&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
	<link rel="stylesheet" type="text/css" href="https://www.paypalobjects.com/webstatic/en_US/developer/docs/css/cardfields.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<script src="../classes/Schema.js"></script>
	<link rel="stylesheet" href="../res/css/navbar.css">
	<link rel="stylesheet" href="../res/css/tabla.css">


</head>

<body>
	<div class="fondo">
<?php
include 'navbar.php';
?>
	
	<div id="smart-button-container" class="a row" style="padding-top:150px;">
		<div class="col-xl-4"></div>
		<div id="paypal-button-container" class="col-xl-4"></div>
		<div class="col-xl-4"></div>
	</div>
	<!-- Aqui inicia Practica 1 Metodo POST y Filtro por fechas -->
	<div class="container" style="padding-top:20px;">
		<div class="row" style="text-align: center; height: 800px;">

			<div class='col-xl-12 row' style="height: 60px;">
				<div class='row'>
					<!-- Campo para inicio de fecha -->
					<div class="col-xl-5 form-group">
						<label for="start">Fecha de inicio:</label>
						<input class="form-control" type="date" id="start" name="trip-start" min="2022-01-01" max="2024-12-31" style="height: 40px;">
					</div>
					<!-- Campo para fecha final/limite -->
					<div class="col-xl-5 form-group">
						<label for="end">Fecha final:</label>
						<input class="form-control" type="date" id="end" name="trip-end" min="2022-01-01" max="2024-12-31" style="height: 40px;">
					</div>
					<button class="btn btn-primary col-xl-2" id="btnFecha" style="height: 40px; margin-top: 30px;  margin-top: 30px;">Reiniciar</button>
				</div>

				<!-- Tabla de inserciones a la base de datos a traves de la Api -->

				<table class="tabla">
					<thead>
						<tr>
							<!-- <th scope="col">#</th> -->
							<th scope="col">Correo electrónico</th>
							<th scope="col">Costo</th>
							<th scope="col">Moneda</th>
							<th scope="col">Fecha de compra</th>
						</tr>
					</thead>
					
					<!-- Aqui van los datos para la tabla obtenidos con el metodo GET -->
					<tbody id="valoresTabla"></tbody>
				</table>
			</div>
			<!-- Boton Paypal para enviar datos por metodo POST a la api -->

		</div>

	</div>

	<!-- Aqui inicia la pactica de los productos -->
	<!-- ------Audio KAWAII------ -->
	<audio id="audioWO" style="display: none;" controls>
		<source type="audio/mp3" src="../res/Cute Arigato.mp3">
	</audio>

	<!-- Productos en general -->
	<div style="margin-left: 70px; margin-right: 40px; text-align: center;">
		<div class="row col-xl-12">
			<!-- Productos -->
			<div id="datos" class="row col-xl-9"></div>
			<!-- Carrito de compras -->
			<div class="col-xl-3" style="margin-left: 20px;">
				<h5 id="total" style="padding-top: 10px;"> Carrito de compra total: $000</h5>
				<div class="row" id="carritoCompra" style="background-color: #E9EEF2; opacity:50px; border-radius: 20px; overflow: auto; height: 400px;">
				</div>

				<!-- Boton para añadir productos al carrito -->
				<div id="smart-button-container" style="padding-top: 10px;">
					<div id="paypal-button-container2" class="col-xl-12"></div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="../scripts/home.js?v1.0.0"></script>
	</div>
</body>

</html>