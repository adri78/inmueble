<?php include "Header.php";
    //error_reporting(E_ALL ^ E_NOTICE);
    error_reporting( E_WARNING | E_PARSE | E_NOTICE);
?>
        <!--Header section end-->

<style>
    #Galeria{
        cursor: pointer;
    }
    #Portada{
        min-height: 30vh;
        min-width: 58vw;
    }
    .single-property {
          height: auto;
    }
    .share div{
        padding: 10px 2px;
    }
    .Similar{
        height: 150px !important;
    }
    @media print {
        #LogoJPG{
            width: 100%;
            display: block;
        }
    }
    @page :first {
        margin-top: 250pt;
    }
    @page :left {
        margin-right: 200pt;
    }

    @page :right {
        margin-left: 200pt;
    }
</style>
        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Información de la propiedad</h1>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->
<?php
if( isset($_GET["I"])){

  $numID= intval( $_GET["I"]);

  if($numID >= 1){
      include 'cgi/panel2/data/dbconfig.php';

      $stmt = $DBcon->prepare( "SELECT `idPro`,`Alqui`,`Banios`,`CodPro`,`Cocheras`,`Credi`,`Gmap`,`Comodidades`, `Galeria`,`Destacar`,`Plano`,`Dolar`,`Domicilio`,`Habita`, `M2`,`MC2`,`Mascotas`,`Descript`, `Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) and (`idPro`='".$numID."');");
      $stmt->execute();
      $row=$stmt->fetch(PDO::FETCH_ASSOC) ;

      if($row["Alqui"]=="A"){
          $Es="Alquiler";
      }
      if($row["Alqui"]=="V"){
          $Es="Venta";
      }
      if($row["Alqui"]=="X"){
          $Es="Alq/Vent";
      }
      if($row["Dolar"]=="1"){
          $Mone=" $ ";

      }else{
          $Mone='u$s ';
      }
      $mapa= (strlen ($row["Gmap"]) >10)? $row["Gmap"]:"img\logo\logo2.jpg";


      // Similares

      $Vdolar=  38.5;

      $Letra=$row["Alqui"];
      if($row["Alqui"]=="X"){
          $Letra="A";
      }

      $V=$row["Valor"];
      $PrecioMa =  $V * 1.3 ;
      $Preciome = $V * 0.8;
      $SQL="SELECT `idPro`,`Alqui`,`CodPro`,`Destacar`,`Dolar`,`Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) AND (`Valor` BETWEEN  ".$Preciome." AND ".$PrecioMa.")  AND (`Alqui` ='".$Letra."') ORDER BY Destacar DESC LIMIT 10;";
/*
      if($row["Dolar"]=="1"){


          $PrecioDMa = $PrecioMa / $Vdolar;
          $PrecioDme = $Preciome / $Vdolar;

         77 $SQL="SELECT `idPro`,`Alqui`,`CodPro`,`Destacar`,`Dolar`,`Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) AND IF( `Dolar`=1 ,(`Valor` BETWEEN  ".$Preciome." AND ".$PrecioMa."),(`Valor` BETWEEN  ".$PrecioDme." AND ".$PrecioDMa."))  AND (`Alqui` ='".$Letra."') ORDER BY Destacar DESC LIMIT 10;";

      }else{
          $PrecioDMa = $row["Valor"] * 1.3  ;
          $PrecioDme=$row["Valor"] * 0.8 ;
           $PrecioMa=$PrecioDMa * $Vdolar;
          $Preciome=$PrecioDme * $Vdolar;

          $SQL="SELECT `idPro`,`Alqui`,`CodPro`,`Destacar`,`Dolar`,`Portada`, (SELECT `tipo` FROM `t_tipo` WHERE `idt`=`TipoID`) as Tipo, `Valor`, (SELECT `zona` FROM `t_zonas` WHERE `idz`=`ZonaID`) as Barrio FROM `t_pro` WHERE (`Estado`=1) AND IF( `Dolar`=1 ,(`Valor` BETWEEN  ".$PrecioDme." AND ".$PrecioDMa."),(`Valor` BETWEEN  ".$Preciome." AND ".$PrecioMa."))  AND (`Alqui` ='".$Letra."') ORDER BY Destacar DESC LIMIT 10;";

      }
*/

  }else{

  }


   // $URL= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

    /* ***************************************************************************************************************** */
?>

    <div class="feature-property properties-list pt-60">
        <div class="container">
            <div class="row">
                <div id="PAG1"  class="col-md-8 col-sm-12 col-xs-12 ">
                    <div id="LogoJPG" style="display: none">
                        <img src="img\logo\logo2.jpg" alt="Mainetti Propiedes">
                    </div>


                    <h4>Codigo : <?php echo $row["CodPro"];?></h4>
                    <div class="single-property-details">
                        <div class="property-details-img">
                            <img src="<?php echo $row["Portada"];?>"  alt="<?php echo $row["Domicilio"];?>" id="Portada">
                        </div>
                        <h5 style="float: right;"><?php echo $Es ." - ".$row["Tipo"];?></h5>
                    </div>

                    <div class="single-property-description">
                        <div class="desc-title">
                            <h5>Descripción</h5>
                        </div>
                        <div class="description-inner" >
                            <p style="font-size: 1.5em; font-family: Montserrat;">
                                <?php echo $row["Descript"];?>
                            </p>
                        </div>
                    </div>
                    <div class="condition-amenities">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="property-condition">
                                    <div class="condtion-title">
                                        <h5>Caracteristicas</h5>
                                    </div>
                                    <div class="property-condition-list">
                                        <ul>
                                            <li>
                                                <img src="img\property\icon-6.png">
                                                <span><?php echo $row["M2"];?> M2 / M2C <?php echo $row["MC2"];?></span>
                                            </li>
                                            <li>
                                                <img src="img\property\icon-7.png">
                                                <span>Habientes <?php echo $row["Habita"];?></span>
                                            </li>
                                            <li>
                                                <img src="img\property\icon-8.png">
                                                <span>Baños <?php echo $row["Banios"];?></span>
                                            </li>
                                            <li>
                                                <img src="img\property\icon-9.png">
                                                <span>Garages <?php echo $row["Cocheras"];?></span>
                                            </li>
                                            <li>
                                                <img src="img\property\icon-10.png">
                                                <span><?php echo $Es;?></span>
                                            </li>
                                            <li>
                                                <style>
                                                    @import url('https://fonts.googleapis.com/css?family=Oswald');
                                                    .price1{
                                                        font-family: 'Oswald', sans-serif;
                                                        background: yellow;
                                                        padding: 5px 15px;
                                                        border: 1px solid #0b0b0b;
                                                    }
                                                </style>
                                                <span class="price1">
                                                        <?php echo $Mone." ".$row["Valor"];?>
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="property-location">
                                            <p><img src="img\property\icon-5.png" alt="">
                                                <?php echo $row["Domicilio"] ." ," . $row["Barrio"];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="amenities">
                                    <div class="amenities-title">
                                        <h5>Comodidades</h5>
                                    </div>
                                    <div class="amenities-list">
                                        <ul id="Otros">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="planning">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="plan-title">
                                    <h5>Croquis/Plano</h5>
                                </div>
                                <div class="plan-map">
                                    <img src="<?php echo $row["Plano"];?>">
                                </div>
                            </div>
                            <div class="col-md-7  col-sm-6 col-xs-12" id="IMapa">
                                <div class="plan-title">
                                    <h5>Mapa</h5>
                                </div>
                                <div class="vimeo-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="<?php echo $mapa;?>" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="row share" id="Share">
    <div class="col-md-3">
        <a id="btnTW" style="background: #4FC1E9;" class="btn btn-primary btn-block" data-sharer="twitter" data-title=<?php echo '"'.$row["Tipo"]."/".$row["Barrio"].'"';?> data-hashtags="mainetti, propiedades" data-url="" ><i class="fa fa-twitter-square"></i> Twitter </a>
    </div>
    <div class="col-md-3">
        <a class="btn btn-primary btn-block" data-sharer="facebook" data-hashtag="hashtag" data-url="https://ellisonleao.github.io/sharer.js/"><i class="fa fa-facebook-square"></i> Facebook</a>
    </div>
    <div class="col-md-3">
        <a id="btnWH" class="btn btn-success btn-block" data-sharer="whatsapp" data-title=<?php echo '"'.$row["Tipo"]."/".$row["Barrio"].'"';?> data-url=" "><i class="fa fa-comments-o"></i> Whatsapp</a>
    </div>
    <div class="col-md-3">
        <a id="btnPI" class="btn btn-danger btn-block" data-sharer="pinterest" data-image="<?php echo 'http://' .$_SERVER[HTTP_HOST].'/'.$row["Portada"]; ?>"  data-url=""><i class="fa fa-pinterest-square"></i> Pinterest</a>
    </div>
    <div class="col-md-3">
        <a id="btnEm" class="btn btn-default btn-block" data-sharer="email" data-title=<?php echo '"'.$row["Tipo"]."/".$row["Barrio"].'"';?> data-url="https://ellisonleao.github.io/sharer.js/" data-subject="Deberias ver este correo" data-to="info@mainettipropiedades.com.ar"> <i class="fa fa fa-send"></i> Email</a>
    </div>
    <div class="col-md-3">
        <a  onclick="printDiv('PAG1')" class="btn btn-warning btn-block" > <i class="fa fa-print"></i> IMPRIMIR </a>

    </div>
        <script>
            document.getElementById('btnTW').setAttribute("data-url",window.location.href);
            document.getElementById('btnWH').setAttribute("data-url",window.location.href);
            document.getElementById('btnWH').setAttribute("data-url",window.location.href);
            document.getElementById('btnEm').setAttribute("data-url",window.location.href);

            function printDiv(nombreDiv) {

                let contenido = document.getElementById(nombreDiv).innerHTML;
                let contenidoOriginal = document.body.innerHTML;

                document.body.innerHTML = contenido;

                window.print();

                document.body.innerHTML = contenidoOriginal;

            }
        </script>
</div>
                    <div class="leave-review" id="Formulario">

                        <div class="aside-title">
                            <h5>Respondemos tus dudas</h5>
                        </div>
                        <div class="review-inner">
                            <form action="respuesta.php" method="post">
                                <h6 id="Codigo" style="display: none"><?php echo $row["CodPro"];?></h6>

                                <div class="form-top">
                                    <div class="input-filed">
                                        <input type="text" placeholder="Nombre" id="Nombre">
                                    </div>
                                    <div class="input-filed">
                                        <input type="text" placeholder=" Email o Celular " id="Email">
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <div class="input-field">
                                        <input type="text" placeholder="Asunto" id="Asunto">
                                    </div>
                                    <textarea placeholder="Tus dudas" id="Dudas"></textarea>
                                </div>
                                <h6 id="codi" style="display: none"> <?php echo $numID ;?></h6>
                                <div class="submit-form">
                                    <button type="submit" id="Enviar">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar right-side">
                        <aside class="single-side-box agent">
                            <div class="aside-title">
                                <h5>Fotos del inmueble</h5>
                            </div>
                            <div class="our-agent-sidbar">
                                <div class="row" id="Galeria">
 <?php
    $elements = explode("|", $row["Galeria"]);
    for ($i = 1; $i < count($elements)-1; $i++) {

 ?>
                                 <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-agent">
                                        <div class="agent-img">
                                            <a>
                                                <img src="<?php echo $elements[$i]; ?>" alt="Foto <?php echo $i; ?>">
                                            </a>
                                        </div>
                                        <div class="agent-title">
                                            <h6><a href="#"></a></h6>
                                        </div>
                                    </div>
                                </div>
<?php
    }
 ?>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-agent">
                                            <div class="agent-img">
                                                <a>
                                                    <img src="<?php echo $row["Portada"]; ?>" alt="<?php echo "Portada"; ?>">
                                                </a>
                                            </div>
                                            <div class="agent-title">
                                                <h6><a href="#"></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>



                        <aside class="single-side-box feature">
                            <div class="aside-title">
                                <h5>Propiedades similares</h5>
                            </div>
                            <div class="feature-property">
                                <div class="row">
<?php
       //echo $SQL . "<br>";

      $stmt = $DBcon->prepare( $SQL);
      $stmt->execute();
      $row2=$stmt->fetch(PDO::FETCH_ASSOC) ;
        while($row2=$stmt->fetch(PDO::FETCH_ASSOC)){

  ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="Inmueble.php?I=<?php echo $row2['idPro'] ;?>">
                                                    <img src="<?php echo $row2['Portada'] ;?>" alt="<?php echo $row2['CodPro'];?>" class="Similar">
                                                </a>
                                            </div>
                                            <div class="property-desc text-center">
                                                <div class="property-desc-top">
                                                    <h6><a href="Inmueble.php?I=<?php echo $row2['idPro'] ;?>"><?php echo $row2['Tipo']."-".$row2['Barrio'] ;?></a></h6>
                                                    <h4 class="price">$ <?php echo  $row2['Valor'] ;?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 <?php
 }
 ?>

                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
 /* *********************************************************************************************** */
}
else{
?>

    <H1 style="padding-top: 5em;padding-bottom: 3em; text-align: center"> Propiedad No encontrada</H1>
<?php
}
    ?>

<?php include "footer.php"; ?>

    </div>
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
    <script src="js\sharer.min.js"></script>
    <script src="js\main.js"></script>

<script>
    const LasDudas= document.getElementById('Enviar').addEventListener("click", function (e) {
        e.preventDefault();
        const Nombre=document.getElementById('Nombre');
        const Asunto=document.getElementById('Asunto');
        const Email=document.getElementById('Email');
        const Dudas=document.getElementById('Dudas');
        const Codigo=document.getElementById('Codigo');
        const codi=document.getElementById('codi');
        if(Nombre.value.length < 5){
                alert("Falta el nombre");
                Nombre.focus();
                return 0;
        }
        if(Email.value.length < 5){
            alert("Necesitamos donde ubicarlo");
            Email.focus();
            return 0;
        }
        let d={Nombre:Nombre.value,Email:Email.value,Asunto:Asunto.value,Dudas:Dudas.value,Codigo:Codigo.value,codi:codi.value};
        $.post("respuesta.php",d,function (res) {
           alert(res);
        });
    }) ;

</script>

<script>
    function CargarOtros(){
        let Como =<?php echo "'". $row["Comodidades"]."'"; ?> ;
        Como =Como.split("|").join(",").substr(0,(Como.length-1));
        if(Como.length >=1 ){
            let d={Como:Como};
            $.post("bd.php?O",d ,function (res) {
                    let tmp = JSON.parse(res);
                    let code = '';
                    let hay = tmp['ALLData'].length;
                    for (x = 0; x < hay; x++) {
                        code += '<li><i class="fa fa-check-square-o"></i> <span>'+  tmp["ALLData"][x].otros + '</span></li>';
                    }
                    document.getElementById('Otros').innerHTML = code;
            });
        }
    };
    (function () {
        const Gale=document.getElementById('Galeria').addEventListener("click", function (e) {
            let R=e.target.src;
            if(R.length > 5){
                document.getElementById('Portada').setAttribute("src",R);
            }

        });
        CargarOtros();
        LasDudas();
    })();
</script>

</body>

</html>