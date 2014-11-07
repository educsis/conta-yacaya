<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>conta.YacaYa</title>

  <link href="assets/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> conta.YacaYa <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="assets/images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>Usuario</h4>
                </div>
            </div>

            <h5 class="sidebartitle actitle">Cuenta</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Perfil</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Configuraci&oacute;n</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Cerrar sesi&oacute;n</span></a></li>
            </ul>
        </div>

      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li><a href="index.html"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li><a href="email.html"><i class="fa fa-suitcase"></i> <span>Empresas</span></a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Compras / Venta</span></a>
            <ul class="children">
                <li><a href="general-forms.html"><i class="fa fa-caret-right"></i> Compras</a></li>
                <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Ventas</a></li>
            </ul>
        </li>
        <li><a href="tables.html"><i class="fa fa-th-list"></i> <span>Proveedores</span></a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-file-text"></i> <span>Reportes</span></a>
          <ul class="children">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Ventas</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Compras</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Cierre mensual</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Proveedores</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Empresas</a></li>
          </ul>
        </li>
        <li><a href="layouts.html"><i class="fa fa-power-off"></i> <span>Cerrar sesi&oacute;n</span></a></li>
      </ul>

      <!--<div class="infosummary">
        <h5 class="sidebartitle">Information Summary</h5>
        <ul>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Daily Traffic</span>
                    <h4>630, 201</h4>
                </div>
                <div id="sidebar-chart" class="chart"></div>
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Average Users</span>
                    <h4>1, 332, 801</h4>
                </div>
                <div id="sidebar-chart2" class="chart"></div>
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Disk Usage</span>
                    <h4>82.2%</h4>
                </div>
                <div id="sidebar-chart3" class="chart"></div>
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">CPU Usage</span>
                    <h4>140.05 - 32</h4>
                </div>
                <div id="sidebar-chart4" class="chart"></div>
            </li>
            <li>
                <div class="datainfo">
                    <span class="text-muted">Memory Usage</span>
                    <h4>32.2%</h4>
                </div>
                <div id="sidebar-chart5" class="chart"></div>
            </li>
        </ul>
      </div>--><!-- infosummary -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>


      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="assets/images/photos/loggeduser.png" alt="" />
                Usuario
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Configuraci&oacute;n</a></li>
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Cerrar sesi&oacute;n</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->

    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Inicio <span>Informaci&oacute;n general.</span></h2>

    </div>

    <div class="contentpanel">
      <!-- content goes here... -->
    </div>

  </div><!-- mainpanel -->

  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>

    <!-- Tab panes -->

  </div><!-- rightpanel -->

</section>



<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/toggles.min.js"></script>
<script src="assets/js/retina.min.js"></script>
<script src="assets/js/jquery.cookies.js"></script>

<script src="assets/js/custom.js"></script>

</body>
</html>
