<?php
    require_once 'App/app.config.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/afacturacss.css" rel="stylesheet">
  <link href="css/color.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <style>
    .form-control{
      border:none;
      border-bottom: 1px solid #ccc;
        font-size: 14px;
    
    }
    input,select{
        border:none;
        border-bottom: 1px solid #ccc;
    }

    .form-control:focus{
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        border-bottom: 2px solid #f49900;
          font-size: 14px;
          color:#000;
      
    }
    input,select:focus{
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        border-bottom: 2px solid #f49900;
    }

    .btn-azul{
        background-color: #324664;
        border-radius: 50px;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.23), 0 2px 5px 0 rgba(0, 0, 0, 0.37);
        color:#fff;
        height: 40px;
    }
    .btn.login:hover{
      /*box-shadow: 0 12px 16px 0 rgba(0,0,0,0.6), 0 17px 50px 0 rgba(0,0,0,0.6);*/
      background-color:#1c41cc;
      color:#fff;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.23), 0 2px 10px 0 rgba(0, 0, 0, 0.37);
    }
    footer {
      background-color: black;
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 40px;
      color: black;
    }

    .btn.btn-red {
        background: #324664;
        color: #fff;
        font-size: 13px;
    }

    .btn.btn-red:hover {
        background: #202851;
        color: #fff;
        font-size: 13px;
    }
    .form-control {
        background: #f49900;
        
    }
    body{

    }    
  </style>
</head>

<body style="background-image: url('img/fondo2.png');background-position: center;background-repeat: no-repeat;background-size: cover ;">
  <div class="container ">
    <br><br>
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6">
                <div class="p-5">
                  
                  <br>    
                  <form id="FormularioUno" class="form-horizontal form-material" method="POST">
                    <div class="form-group">
                      <input id="Correo" type="text" class="form-control" name="Correo" placeholder="Usuario" autofocus>
                    </div>
                    <div class="form-group">
                      <input id="Password" type="password" class="form-control" name="Password" placeholder="Contraseña">
                    </div>

<div class="col-12">
                                    <div>
                                        <label>Empresa </label>
                                        <select class="form-select" id="opEmpresa" name="opEmpresa">
                                            <option value="Portales">Portales</option>
                                            <option value="Suiza">Suiza</option>
                                            <option value="Ferreri" selected>Ferreri</option>
                                        </select>
                                    </div>
                                </div>


                    
                    <div class="form-group">
                    <input type="checkbox" name="mantener_sesion_abierta" value="si">
                    <label><b>Mantener sesión</b> </label>
               
                    </div><br>
                    
                    <button type="submit" class="btn login btn-red btn-block" id="botonSolicitud" style="border-radius: 0.35rem;">Iniciar</button>
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
              <div style="background-image: url('img/logo.png');" class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  
</body>


<script src="JS/bootstrap.bundle.min.js"></script>
<script src="JS/jquery.min.js"></script>

<script src="JS/login.js"></script>
<script>
  const URL_WEB = "<?=url_link?>";
</script>

</html>