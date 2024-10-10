<?php
    require_once 'App/app.config.php';
	$Titulo = "Login";	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<link rel="shortcut icon" href="<?=url_link?>img/aiko.icon.ico" />
	<title> Cotizador | <?=@$Titulo?></title>

	<link href="<?=url_link?>css/app.css" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const URL_WEB = "<?=url_link?>";
    </script>
</head>
<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form id="frmLogin">
										<div class="mb-3">
											<label class="form-label">Correo</label>
											<input class="form-control form-control-lg" type="email" name="inp_Correo" id="inp_Correo" autocomplete="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Correo electrónico" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Contraseña</label>
											<input class="form-control form-control-lg" type="password" name="inp_Password" id="inp_Password" placeholder="Contraseña" required/>
										</div>
										<div class="d-grid gap-2 mt-1">
											<button type="submit" class="btn btn-md btn-primary">Acceso</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- <div class="text-center mb-3">
							Don't have an account? <a href="pages-sign-up.html">Sign up</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
	<script>
		$(document).ready(function () {
			$("#frmLogin").submit(function (e) { 
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: `${URL_WEB}Controller/Login/controller.entrar.php`,
					data:  $('#frmLogin').serialize(),
					dataType: "html",
					async: false,
					success: function (response) {
						response = response.trim(); 
						if (response === "L01") {
							window.location.href = `${URL_WEB}View/index.php`;
						} else {
							alert("Error al iniciar sesion"); 
						}
					}
				});
			});
		});
	</script>
</body>
</html>