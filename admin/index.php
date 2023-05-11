<!doctype html>
<!-- 
* Bootstrap Simple Admin Template *
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GAMENEXT | Admin Panel</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/fav/favicon-16x16.png">
	<link rel="manifest" href="../img/fav/site.webmanifest">
	<link rel="mask-icon" href="../img/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="../img/fav/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<style type="text/css">
		body{
			background: url("assets/img/cover.png") !important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
		}
	</style>
</head>

<body>
	
    <div class="wrapper">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
			<div class="container">
				<a class="navbar-brand logo-text" href="#">
					<img style="width: 50%" src="../img/game_next_logo.png">
				</a>
				<li style="list-style: none" class="nav-item">
				  <a style="margin: 0px 0px 0px 10px;margin-top: 0px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px;padding-right: 40px;" class="my-btn text light btn" href="../index.html">
					  Regresar al Sitio Web
					  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
						<lord-icon
							src="https://cdn.lordicon.com/jxwksgwv.json"
							trigger="loop"
							delay="1500"
							colors="primary:#ffd800"
							state="intro"
							style="width:18px;height:18px;vertical-align: middle;padding-left: 10px;transform: scale(2)">
						</lord-icon>
				</a>
            </li>
			</div>
		</nav>
		
        <div id="body" class="active">
			<br><br><br><br><br>
            <div class="content">
                <div id="cont" class="container">
                    <div class="page-title">
                        <h3 class="text">PANEL DE ADMINISTRACION</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="text card-header">ADMINISTRACION VENTAS</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form action="venta.php" method="POST">
                                        <div class="mb-3 row">
                                            <label class="text col-sm-4">
												Escriba nombre del producto
											</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="producto" id="producto" autofocus class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="mb-3 row">
                                            <label class="text col-sm-4">
												Nombre del cliente
											</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nombre" id="nombre" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="mb-3 row has-danger">
                                            <label class="text col-sm-4">
												Monto sin descuento
											</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="montoSin" id="montoSin" class="form-control">
                                            </div>
                                        </div>
										<div class="line"></div><br>
                                        <div class="mb-3 row has-danger">
                                            <label class="text col-sm-4">Monto con descuento</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="montoCon" id="montoCon" class="form-control">
                                            </div>
                                        </div>
										<div class="line"></div><br>
                                        <div class="mb-3 row has-danger">
                                            <label class="col-sm-4">Descuento del producto</label>
                                            <div class="text col-sm-8">
                                                <input type="text" name="descuento" id="descuento" class="form-control">
                                            </div>
                                        </div>
										<br>
                                        <div class="row">
                                            <div class="col-sm-4 offset-sm-12">
                                                <button style="margin: 0px 0px 0px 10px;margin-top: 0px;margin-top: 10px;padding-top: 5px;padding-bottom: 5px" class="my-btn text light btn" type="submit" class="btn btn-primary mb-2" id="my-btn_save_data"><i style="padding-right: 10px;margin: 0px 50px 0px" class="fas fa-save"></i> Registrar Venta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-6">
                            <div style="min-height: 565px;" id="card_data" class="card">
                                <div class="text card-header">INFORMACION DETALLE</div>
                                <div id="listar" class="card-body">
                                    
 									<!-- AQUI SE CARGARA LA INFORMACION REQUERIDA -->
									
                                </div>
                            </div>
                        </div>
                    </div>
					<br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
	<footer>
      <div class="footer-bottom">
         <div class="container">
            <div class="row justify-content-between gy-3">
               <div class="col-md-6">
                  <p class="text mb-0"><strong class="text y-col">GAMENEXT</strong> © Agencia 2023. Todos los derechos reservados</p>
               </div>
            </div>
         </div>
      </div>
   </footer>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.js"></script>
	<!-- CODIGO JAVASCRIPT DEL ADMIN TEMPLATE -->
    <script src="assets/js/script.js"></script>
	<!-- CODIGO JAVASCRIPT DEL PROBLEMA -->
	<script src="js/main.js"></script>
</body>

</html>