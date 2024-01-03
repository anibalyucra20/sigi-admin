<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio </title>
    <!--icono en el titulo-->
    <link rel="shortcut icon" href="">
    <!-- Bootstrap -->
    <link href="plantilla/Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plantilla/Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="plantilla/Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="plantilla/Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="plantilla/Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="plantilla/Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="plantilla/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="plantilla/Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php
            include("include/menu_admin.php"); ?>
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-calendar"></i> Periodo Académico</span>

                        <div class="count">2023-II</div>
                        <span class="count_bottom"><a href=""><i class="green">.</i></a></span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-child"></i> Estudiantes</span>
                        <div class="count">375</div>
                        <span class="count_bottom"><a href="estudiante"><i class="green">Ver</i></a></span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-check-square-o"></i> Matrículas</span>
                        <div class="count">344</div>
                        <span class="count_bottom"><a href="matriculas"><i class="green">Ver</i></a></span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-book"></i>Unidades Didácticas Programadas</span>
                        <div class="count">96</div>
                        <span class="count_bottom"><a href="programacion"><i class="green">Ver</i></a></span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-pencil-square-o"></i> Evaluación</span>
                        <div class="count">96</div>
                        <span class="count_bottom"><a href="calificaciones_unidades_didacticas"><i class="green">Ver</i></a></span>
                    </div>
                    <?php 
                    echo $_GET['dato1'];
                    echo $_GET['dato2'];
                    ?>
                </div>




            </div>
            <!-- /page content -->


            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Instituto De Educación Superior Tecnológico Público "HUANTA"
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="plantilla/Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plantilla/Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plantilla/Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="plantilla/Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="plantilla/Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="plantilla/Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="plantilla/Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="plantilla/Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="plantilla/Gentella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="plantilla/Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="plantilla/Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="plantilla/Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="plantilla/Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="plantilla/Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="plantilla/Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="plantilla/Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="plantilla/Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="plantilla/Gentella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="plantilla/Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="plantilla/Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="plantilla/Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="plantilla/Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="plantilla/Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="plantilla/Gentella/build/js/custom.min.js"></script>


</body>

</html>
<?php
