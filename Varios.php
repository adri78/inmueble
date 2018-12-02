<?php
$Whatsapp="(011) 3924 9741";
$WhatsappNumero="5491139249741";
$VerDolar="";
$Menu='<ul><li><a href="index.php">Inicio</a></li>
           <li><a href="Alquiler.php">Alquiler</a></li>
           <li><a href="Ventas.php">Ventas</a> </li>
           <li><a href="Novedades.php">Oportunidades</a></li>
           <li><a href="contacto.php"> Contacto</a></li>
       </ul>';

$Content1="Somos una empresa familiar que ya cuenta con dos generaciones de martilleros y con más de 30 años en el mercado <br> ";

$DolarReal='<div class="haven-call">
                 <p style="margin-top: -30px ;-webkit-margin-top: -130px;background: rgba(47, 48, 50, 0.53);border-radius: 5px; padding: 10px;">
                    <a href="https://api.whatsapp.com/send?phone='.$WhatsappNumero.'" style="color:#10b010;">
                            <img src="css/whatsapp.png" style="width: 1.5em;"> '.$Whatsapp. '
                    </a>
                    <span id="DDolar">
                        <style type="text/css">
                              .cotizacion_personalizada a{color:#f1931c; text-decoration:none}
                        </style>
                        <span id="cotizacion_personalizada" class="cotizacion_personalizada">
                              <a href="http://www.dolarcito.com.ar/?ver=cotizacion_de_divisa&divisa=1">Dólar</a>  ${dolar_v} &nbsp;
                        </span>
                    <script src="http://www.dolarcito.com.ar/scripts/cotizacion_personalizada.js" language="javascript" type="text/javascript"></script>
                    <script language="javascript" type="text/javascript">show(s_cotizacion_personalizada)</script>
                  </span></p></div>';

?>