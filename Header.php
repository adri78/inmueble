<?php include 'Varios.php' ; ?>
<?php include 'bd.php' ;

if(!isset($description)){
    $description="Alquileres,Ventas,Inmueble,Burzaco,inmobiliaria,Administración alquileres,Casas,Departamentos,Terrenos,Loteos,";
}

if(!isset($keywords)){
    $keywords="Alquileres,Ventas,Inmueble,Burzaco,inmobiliaria,Administración alquileres,Casas,Departamentos,Terrenos,Loteos,";
}

?>
<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MAINETTI Propiedades</title>
    <meta name="description" content="<?php echo $description; ?>" >
    <meta name="keywords" content="<?php echo $keywords ; ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img\apple-touch-icon.png" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\core.css">
    <link rel="stylesheet" href="css\shortcode\shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css\responsive.css">
    <link rel="stylesheet" href="css\style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">
    <style>
        #Maximo{
            text-align: right;
        }
        #DDolar{
            cursor:pointer;
            color:orange;
            padding: 0 20px;
            border-radius: 5px;
        }
        #DivMascotas{
            display: none;
        }
    </style>
    <!-- Modernizr JS -->
    <script src="js\vendor\modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Su navegador es muy antiguo, <strong> cambie por uno más moderno</strong>  <a href="https://www.google.com/chrome/"> Google Chrome desde aqui</a> lo espramos a que vuelva.</p>
<![endif]-->
<!--Preloader start-->
<div id="fakeLoader"></div>
<!--Preloader end-->
<div class="wrapper white_bg">
    <!--Header section start-->
    <header class="header">
        <div class="header-top sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="logo">
                            <a href="index.php"><img src="img\logo\logo2.jpg" alt="Mainetti Propiedes" id="LogoJPG"></a>
                        </div>
                    </div>
                    <div class="col-md-10 hidden-sm hidden-xs">
                        <div class="mgea-full-width">
                            <div class="header-menu">
                                <nav>
                                    <?php echo $Menu; ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <div class="mobile-menu-area hidden-lg hidden-md">
                <div class="container">
                    <div class="col-md-12">
                        <nav id="dropdown">
                            <?php echo $Menu; ?>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile menu end -->
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo $DolarReal; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>