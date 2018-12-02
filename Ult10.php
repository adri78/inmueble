<?php
include 'cgi/panel2/data/dbconfig.php'; /*  Lista los ultimos 10  para ventas */

$stmt = $DBcon->prepare( "SELECT `idPro`,`Alqui`, `Banios`, `CodPro`, `Cocheras`, `Credi`, `Destacar`, `Dolar`, `Domicilio`,`Habita`, `M2`,`Mascotas`, `Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) 
ORDER BY `idPro`,`Destacar` DESC LIMIT 11;");
$stmt->execute();
$Propiedades="";
$Es="";
?>

<div class="property-list">
<?php
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="single-property">
            <span class=""><?php echo $row["CodPro"];?></span> <!-- bg-blue -->
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

    <div class="col-md-4">
        <div class="single-property Cartel">
            <a href="Ventas.php"><h1>Ver Más Propiedades</h1> </a>
        </div>
    </div>
</div>