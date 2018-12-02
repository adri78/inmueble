<?php include_once('data/view2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panel de Control-Zonas</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="../dist/css/site.min.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>

    <![endif]-->

</head>
<body>

<?php   //Barra Superior
include ("help/menuArriba.php");
?>
<!--header-->
<div class="container-fluid">
    <!--documents-->
    <div class="row row-offcanvas row-offcanvas-left">

        <?php
        include ("help/menuLateralIzquierda.php");
        ?>

        <div class="col-xs-12 col-sm-9 content" id="app1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Zonas / Barrios</h3>
                </div>
                <div class="panel-body">
                    <div class="content-row" id="Contenido">
                        <?php
                            include("job/TZonas.php");
                        ?>
                    </div>
                </div><!-- panel body -->
            </div>
        </div><!-- content -->


    </div>
</div>
<!--footer-->
<?php
// include("help/Footer.php");
?>



<script type="text/javascript" src="../dist/js/site.min.js"></script>
<script src="../dist/js/jquery.js"></script>




</body>
</html>