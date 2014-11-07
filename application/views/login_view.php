<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>conta.YacaYa.com .::. Login</title>

  <link href="assets/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">

                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> conta.YacaYa <span>]</span></h1>
                    </div><!-- logopanel -->

                    <div class="mb20"></div>

                    <h5><strong>Bienvenidos a conta.YacaYa</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Contabilidad inteligente</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Reportes</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Data seguro</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Interfaz pr&aacute;ctica</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> y mucho m&aacute;s...</li>
                    </ul>
                    <div class="mb20"></div>
                    <strong>Quieres una cuenta? <a href="signup.html">Subscribete</a></strong>
                </div><!-- signin0-info -->

            </div><!-- col-sm-7 -->

            <div class="col-md-5">

                <?= form_open(''); ?>
                    <h4 class="nomargin">Login</h4>
                    <p class="mt5 mb20">Entra a tu cuenta</p>
                    <?php
                        if($this->session->flashdata('error')){
                    ?>
                    <div class="alert alert-danger">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong>ERROR! </strong> <?= $this->session->flashdata('error'); ?>
                    </div>
                    <?php
                        }
                    ?>
                    <input type="text" class="form-control uname" name="user" placeholder="Usuario" />
                    <input type="password" class="form-control pword" name="pass" placeholder="Clave" />
                    <a href="#"><small>No recuerdas tu clave?</small></a>
                    <button type="submit" name="entrar" class="btn btn-success btn-block">Entrar</button>

                <?= form_close(); ?>
            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. Todos los derechos reservados. conta.YacaYa v.0.01
            </div>
            <div class="pull-right">
                Creado por: <a href="http://yacaya.com/" target="_blank">Yacaya.com</a>
            </div>
        </div>

    </div><!-- signin -->

</section>


<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/retina.min.js"></script>

<script src="assets/js/custom.js"></script>

</body>
</html>
