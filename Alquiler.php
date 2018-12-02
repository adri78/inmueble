<?php
$description="Experto en Alquileres, para  que ese lugar se transformeen tu hogar. Y tu inversión eeste bien cuidada.";
include "Header.php";
?>

        <!--Header section end-->
<style>
    #VDestacada .single-property,#VNovedad .single-property{
        height: 100% !important;

    }
    #VNovedad .owl-item:last-child  {
        width: 100% !important;

    }
    #VNovedad .owl-item:last-child h1  {
         font-size: 0.95em;
        padding:1em 0.5em;
    }
</style>
        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Alquileres</h1>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumbs end-->

        <!--Feature property section-->
        <div class="feature-property pt-130">
            <div class="container">
                <div class="row">
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="sidebar left">
                            <aside class="single-side-box search-property">
                                <div class="aside-title">
                                    <h5>Filtros de busquedad</h5>
                                </div>
                                <div class="find_home-box">
                                    <div class="find_home-box-inner">
                                        <form action="#">
                                            <div class="find-home-cagtegory">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select ">                  
                                                            <select class="selectpicker" title="Tipo" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Alquileres">
<?php echo $TiposA; ?>
                                                                </optgroup>
                                                                <optgroup label="Con opción de Venta">
<?php echo $TiposX; ?>
                                                                </optgroup>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">                  
                                                            <select class="selectpicker" title="Zona" data-hide-disabled="true" data-live-search="true">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option>Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Zona">
<?php echo $Zona; ?>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Cochera" data-hide-disabled="true">
                                                                <optgroup label="">
                                                                    <option label="1" value="1">Con Cochera</option>
                                                                    <option value="0">Sin Cochera</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Ambientes" data-hide-disabled="true">
                                                                <optgroup label="">
                                                                    <option label="1">Mono Ambientes</option>
                                                                    <option>2 Ambientes</option>
                                                                    <option>3 Ambientes</option>
                                                                    <option>4 Ambientes</option>
                                                                    <option>+4 Ambientes</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Baños" data-hide-disabled="true">
                                                                <optgroup label="">
                                                                    <option label="1">1 Baño</option>
                                                                    <option>2 Baños</option>
                                                                    <option>3 Baños</option>
                                                                    <option>+3 Baños</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">
                                                            <select class="selectpicker" title="Dormitorios" data-hide-disabled="true">
                                                                <optgroup label="">
                                                                    <option>1 Dormitorio</option>
                                                                    <option>2 Dormitorios</option>
                                                                    <option>3 Dormitorios</option>
                                                                    <option>4 Dormitorios</option>
                                                                    <option>+4 Dormitorios</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">
                                                            <select class="selectpicker" title="Moneda" data-hide-disabled="true">
                                                                <optgroup label="">
                                                                    <option>$ Pesos</option>
                                                                    <option>U$s Dolares</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                         <div class="find-home-item custom-select" id="DivMascotas">
                                                             <select class="selectpicker" title="Mascotas" id="Mascotas" data-hide-disabled="true">
                                                                 <optgroup label="">
                                                                     <option value="1">Si -Apto- </option>
                                                                     <option value="2">No. Sin Mascotas</option>
                                                                 </optgroup>
                                                             </select>
                                                         </div>
                                                    </div>                                                   
                                                    <div class="col-md-12">
                                                        <label for="Maximo" class="col-sm-6 col-xs-12" style="margin-top:1em;text-align:right ;">Pagar hasta:</label>
                                                        <input type="number" class="col-sm-6 col-xs-12" id="Maximo" placeholder="Maximo" name="Maximo">
                                                    </div>

                                                    <div class="find-home_bottom">
                                                        <div class="col-md-12">
                                                          
                                                            <div class="find-home-item">
                                                               <button type="submit"> VER </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                            </aside>
                            <aside class="single-side-box feature" id="VDestacada">
                                <div class="aside-title">
                                    <h5>Propiedades Destacadas</h5>
                                </div>
                                <div class="feature-property">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\7.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\3.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\5.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\11.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box feature" id="VNovedad">
                                <div class="aside-title">
                                    <h5>Novedades</h5>
                                </div>
                                <div class="feature-property">
                                    <div class="row">

 <?php include "ListaPro2.php"; ?>

 <!--
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\7.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\3.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\5.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="single-property">
                                                <div class="property-img">
                                                    <a href="single-properties.html">
                                                        <img src="img\property\11.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="property-desc text-center">
                                                    <div class="property-desc-top">
                                                        <h6><a href="single-properties.html">Friuli-Venezia Giulia</a></h6>
                                                        <h4 class="price">$52,354</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
       -->

                                    </div>
                                </div>
                            </aside>
                            
                        </div>
                    </div>


<!-- ************************************************************************************ -->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row" id="VerPropiedades">

                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination">
                                    <div class="pagination-inner text-center">
                                        <ul>
                                            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>. . . . . .</li>
                                            <li><a href="#">15</a></li>
                                            <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!--Feature property section end-->
<!--Brand section end-->
<?php include "footer.php"; ?>
    </div>

    <script src="js\vendor\jquery-1.12.0.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery.nivo.slider.pack.js"></script>
   <!--
    <script src="js\waypoints.min.js"></script>
    -->
    <script src="js\jquery.counterup.min.js"></script>
    <script src="js\ajax-mail.js"></script>
    <script src="js\owl.carousel.min.js"></script>
    <script src="js\jquery.magnific-popup.js"></script>
    <script src="js\style-customizer.js"></script>
    <script src="js\plugins.js"></script>
    <script src="js\main.js"></script>


<script>
    let ProAll;


    function VerPro(List){

        let x;
        let code = '';
        let hay = List['ALLData'].length;
        for (x = 0; x < hay; x++) {
            code=code+'<div class="col-md-6 col-sm-6 col-xs-12"><div class="single-property mb-40"><span>'+List['ALLData'][x].CodPro  +'</span>';
            code=code+'<div class="property-img"> <a href="Inmueble.php?I='+ List['ALLData'][x].idPro  +'"><img src="'+ List['ALLData'][x].Portada + '" alt="'+List['ALLData'][x].Domicilio+'"></div><div class="property-desc"></a><div class="property-desc-top">';
            code=code+'<h6><a href="Inmueble.php?I='+List['ALLData'][x].idPro +'">'+List['ALLData'][x].Domicilio+'</a></h6><h4 class="price">'+ List['ALLData'][x].Valor+'</h4>';
            code=code+'<div class="property-location"><p><img src="img\\property\\icon-5.png">'+ List['ALLData'][x].Valor+'</p></div> </div>'
            code=code+'<div class="property-desc-bottom"><div class="property-bottom-list"><ul><li><img src="img\\property\\icon-1.png"><span>'+List['ALLData'][x].M2 +' M2</span></li>';
            code=code+'<li><img src="img\\property\\icon-2.png"><span>'+List['ALLData'][x].Habita +'</span></li><li><img src="img\\property\\icon-3.png"><span>'+List['ALLData'][x].Banios+'</span></li>';
            code=code+'<li><img src="img\\property\\icon-4.png"><span>'+ List['ALLData'][x].Cocheras+'</span></li></ul></div></div></div></div></div>';
        }

        document.getElementById('VerPropiedades').innerHTML=code;
    }



    const CargarPro = function (){
        $.get("visor.php?A" ,function (res) {
            if(res.length>5) {
                ProAll = JSON.parse(res);
                // console.log(ProAll);
                VerPro(ProAll);
            }
        });
    };






    (function () {
        CargarPro();

    })();

</script>


</body>

</html>