<?php include "Header.php" ?>
<!--Header section end-->
<style>
    #VerPropiedades .property-desc-top{
        min-height: 100px;
    }
    #VerPropiedades .col-md-4 {
        margin-bottom: 3em;
    }
</style>
        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Novedades inmobiliarias<br><br>
                                <small style="color:white;">estas son las ultimas incorporaciones</small></h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Feature property section-->
        <div class="feature-property pt-60">
            <div class="container">
                <div class="row" id="VerPropiedades">

                    <?php
                    include 'cgi/panel2/data/dbconfig.php'; /*  Lista los ultimos 10  para ventas */

                    $stmt = $DBcon->prepare( "SELECT `idPro`,`Alqui`, `Banios`, `CodPro`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`,`Habita`, `M2`,`Mascotas`, `Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) and (`FAlta` >=  DATE_ADD(now(), INTERVAL -2 MONTH)) ORDER BY `FAlta`,`Destacar` DESC;");
                    $stmt->execute();
                    $Propiedades="";
                    $Es="";
                    ?>

 <!-- *
                    <div class="property-list">
                    ** -->

                        <?php
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-property">
                                <span><?php echo $row["CodPro"];?></span> <!-- bg-blue -->
                                    <?php

                                    if($row["Credi"]){
                                        echo '<span class="bg-orenge Bajo">Credito</span>';
                                    }
                                    if($row["Alqui"]=="A"){
                                        $Es="Alquiler";
                                    }
                                    if($row["Alqui"]=="V"){
                                        $Es="Venta";
                                    }
                                    if($row["Alqui"]=="X"){
                                        $Es="Alq/Ven";
                                    }
                                    if($row["Alqui"]=="X"){
                                        echo ' <span class="bg-mora Derecha Bajo">c/Opción</span>';
                                    }

                                    ?>
                                    <span class="bg-blue Derecha"><?php echo $Es; ?></span>
                                    <div class="property-img">
                                        <a href="Inmueble.php?I=<?php echo $row["idPro"];?>">
                                            <img src="<?php echo $row["Portada"];?>"  alt="<?php echo $row["Domicilio"];?>">
                                        </a>
                                    </div>

                                    <div class="property-desc">
                                        <div class="property-desc-top">
                                            <h6><a href="Inmueble.php?I=<?php echo $row["idPro"];?>"><?php echo $row["Domicilio"];?></a></h6>
                                            <h4 class="price">
                                                <?php
                                                if( $row["Dolar"]==1) {
                                                    echo $row["Valor"]. "<br>Pesos ";
                                                }else{
                                                    echo '<span class="Do">u$s <br> '.$row["Valor"]."</span> ";
                                                };?>

                                            </h4>
                                            <div class="property-location">
                                                <p><img src="img\property\icon-5.png"> <?php echo $row["Barrio"];?> - <?php echo $row["Tipo"];?></p>
                                            </div>
                                        </div>
                                        <div class="property-desc-bottom">
                                            <div class="property-bottom-list">
                                                <ul>
                                                    <li>
                                                        <img src="img\property\icon-1.png" alt="M²">
                                                        <span><?php echo $row["M2"];?> m²</span>
                                                    </li>
                                                    <li>
                                                        <img src="img\property\icon-2.png" alt="Hab">
                                                        <span><?php echo $row["Habita"];?></span>
                                                    </li>
                                                    <li>
                                                        <img src="img\property\icon-3.png" alt="Ba">
                                                        <span><?php echo $row["Banios"];?></span>
                                                    </li>
                                                    <li>
                                                        <img src="img\property\icon-4.png" alt="Co">
                                                        <span><?php echo $row["Cocheras"];?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   }; ?>
                </div>
                <div class="row" style="margin-top: 3em;">
                        <div class="col-xs-12"">
                            <div class="single-property Cartel" style="height: 200px;">
                                <a href="Ventas.php"><h1 style="padding-top: 1.25em;">Ver Más Propiedades</h1> </a>
                            </div>
                        </div>
                    </div>


            </div>

        <!--Feature property section end-->

<!--Brand section end-->
<?php include "footer.php"; ?>
    </div>

    <!-- All jquery file included here -->
    <script src="js\vendor\jquery-1.12.0.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery.nivo.slider.pack.js"></script>
    <script src="js\waypoints.min.js"></script>
    <script src="js\jquery.counterup.min.js"></script>
    <script src="js\ajax-mail.js"></script>
    <script src="js\owl.carousel.min.js"></script>
    <script src="js\jquery.magnific-popup.js"></script>
    <script src="js\style-customizer.js"></script>
    <script src="js\plugins.js"></script>
    <script src="js\main.js"></script>
</body>

</html>