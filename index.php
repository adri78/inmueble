<?php include "Header.php" ?>
        <!--Header section end-->
        <!--slider section start-->
<?php include "slider.php"; ?>
        <!--slider section end-->
        <!--Find home area start-->


        <div class="find-home">
            <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="find-home-title">
                            <h3>Asistente para propiedades <small>(solo marque los filtros que le interesan)</small></h3>
                        </div>
                    </div>
                    <form action="#">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="find-home-item custom-select mb-40">                  
                                <select class="selectpicker" title="Tipo" id="Tipo" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Alquileres">
<?php echo $TiposA; ?>
                                    </optgroup>
                                    <optgroup label="Venta">
<?php echo $TiposV; ?>
                                    </optgroup>
                                    <optgroup label="Con opción de Venta">
<?php echo $TiposX; ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="find-home-item custom-select">                  
                                <select class="selectpicker" title="Zona" id="Zona" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Zona">
<?php echo $Zona; ?>
                                    </optgroup>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item  custom-select">
                                <select class="selectpicker" title="Por Fechas" id="PorFecha" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option value="0">Cualquiera</option>
                                        <option value="1">Ultimos Meses</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!--  Ambientes -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item  custom-select">                  
                                <select class="selectpicker" title="Ambientes" id="Ambientes" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option label="1" value="1">Mono Ambientes</option>
                                        <option value="2"> 2 Ambientes</option>
                                        <option value="3"> 3 Ambientes</option>
                                        <option value="4"> 4 Ambientes</option>
                                        <option value="5"> 5 Ambientes</option>
                                        <option value="6"> +5 Ambientes</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                         <!-- Fin Ambientes -->                        
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item  custom-select">
                                <select class="selectpicker" title="Baños" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option label="1" label="1">1 Baño</option>
                                        <option label="2">2 Baños</option>
                                        <option label="3">3 Baños</option>
                                        <option label="4">+3 Baños</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="row"></div>
                         
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select">                  
                                <select class="selectpicker" title="Cocheras" id="Cocheras" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option value="0">Sin Cochera</option>
                                        <option value="1">1 Cocheras</option>
                                        <option value="2">2 Cocheras</option>
                                        <option value="3">3 Cocheras</option>
                                        <option value="4">4 Cocheras</option>
                                        <option value="5">+4 Cocheras</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select">
                                <select class="selectpicker" title="Moneda" id="Moneda" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option value="1">$ Pesos</option>
                                        <option value="2">U$s Dolares</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12"> 
                            <label for="Maximo" class="col-sm-6 col-xs-12" style="margin-top:1em;text-align:right ;">Pagar hasta:</label>
                            <input type="number" class="col-sm-6 col-xs-12" id="Maximo" placeholder="Maximo" name="Maximo">
                            
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="find-home-item custom-select" id="DivCreditos">
                                <select class="selectpicker" title="Apto Credito" id="Creditos" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option value="1">Si -Apto </option>
                                        <option value="2">no determinado</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="find-home-item custom-select" id="DivMascotas">
                                <select class="selectpicker" title="Mascotas" id="Mascotas" data-hide-disabled="true">
                                    <optgroup label="">
                                        <option value="1">Si -Apto- </option>
                                        <option value="2">No. Si nMascotas</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12">
                            <div class="find-home-item">
                                <button type="submit">Ver Resultados</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Find home area end-->

        <!--Feature property section start-->

<style>


</style>

        <div class="property-area fadeInUp wow" data-wow-delay="0.1s" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature-property-title">
                            <h3>Propiedades destacadas</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="property-tab-menu">
                            <ul class="nav" role="tablist">
                                <li role="presentation" class="active"><a href="#sale" aria-controls="sale" data-toggle="tab">Propiedades en Venta</a></li>
                                <li role="presentation"><a href="#rent" aria-controls="rent" data-toggle="tab">Alquileres</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="sale">
<!-- ************************************************************* -->
<?php include "ListaPro1.php"; ?>
                         </div>

                        <div role="tabpanel" class="tab-pane fade" id="rent">
<?php include "ListaPro2.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->

        <!--Welcome Haven section-->
        <div class="welcome-haven bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 fadeInLeft wow welcome-pd" data-wow-delay="0.2s">
                        <div class="welcome-title">
                            <h3 class="title-1">MAINETTI <span>PROPIEDADES</span></h3>
                            <h4 class="title-2"></h4>
                        </div>
                        <div class="welcome-content">
                            <p> <span>MAINETTI</span> es una empresa familiar,de dos generaciones de martilleros y con más de treinta años de presencia en el mercado local. Contamos con una cartera solida
                            que solo se logra con una trayectória intachable. Por eso y porque Usted nos conoce, cuando necesite un honesto acesoramiento inmbiliario no dude en recurrir a nosotros </p>
                        </div>
                        <div class="welcome-services">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="img\welcome\icon-1.png" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Nuestra comisión</h6>
                                            <p>Cuentas claras sin solpresas <br> nuestra conducta nos respalda</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="img\welcome\icon-2.png" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Tasaciones </h6>
                                            <p>Estamos al tanto del mercado<br> para dar tasaciones justas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="img\welcome\icon-3.png" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Busqueda</h6>
                                            <p>Buscamos ese lugar que te enamore<br> sin matar tu presupuesto</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="w-single-services">
                                        <div class="services-img">
                                            <img src="img\welcome\icon-4.png" alt="">
                                        </div>
                                        <div class="services-desc">
                                            <h6>Rentable</h6>
                                            <p>Tanto inquilinos , como propietarios <br> saben lo importante de encontrar <br>el lugar correcto</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="welcome-haven-img fadeInRight wow" data-wow-delay="0.2s">
                            <img src="img\welcome\1.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome Haven section end-->
        <!--Feature property section-->
        <div class="feature-property ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>Ultimas Propiedades</h3>
                            <p>Estas son algunas de las nuevas opciones que nos gustarian conpatir con usted <br>
                                Recuede suscribirse a nuestro boletin de novedades, donde en contrara primicias acorde a sus busqueda .</p>
                        </div>
                    </div>
                </div>
                <div class="row">

<?php include "Ult10.php"; ?>

                </div>
            </div>
        </div>
        <!--Feature property section end-->

        <!--Awesome Feature section-->
        <div class="awesome-feature bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>Preguntas Frecuentes</h3>
                            <h3><p>MAINETTI PROPIEDADES .</p></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="awesome-feature-desc">
                            <div class="awesome-feature-img">
                                <div class="awesome-feature-img-border">
                                    <div class="awesome-feature-img-inner">
                                        <img src="img\awesome\feature.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="awesome-feature-list">
                                <div class="col-4 left">
                                    <div class="single-awesome-feature one mb-87 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Fully Furnished</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-tools-alt-2"></i>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature two mb-87 wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Royal Touch Paint</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-paint-brush"></i>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature three wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="1.4s">
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Non Stop Security</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                        <div class="s-awesome-feature-icon">
                                            <i class="zmdi zmdi-bug"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 right">
                                    <div class="single-awesome-feature four mb-87 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-calculations"></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Latest Interior Design</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature five mb-87 wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="fa fa-leaf"></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Living Inside a Nature</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-awesome-feature six wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1.4s">
                                        <div class="s-awesome-feature-icon">
                                            <i class="icofont icofont-fix-tools"></i>
                                        </div>
                                        <div class="s-awesome-feature-head">
                                            <div class="s-awesome-feature-title">
                                                <h6>Luxurious Fittings</h6>
                                            </div>
                                            <div class="s-awesome-feature-text">
                                                <p>Paint cost provides ar best for <br> elit, sed do eiusmod tempe</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Awesome Feature section end-->
 
        <!--Latest blog start-->
        <div class="latest-blog ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <h3>Noticias inmobiliarias</h3>
                                <p> <span style="color:darkblue; font-size: 1.3em;font-weight: bold;"> MAINETTI </span> <span style="color:orangered;">PROPIEDADES</span>
                                    tenemos el agrado de informales estas novedades.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="img\blog\1.jpeg" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        12
                                    </span>
                                    <span class="post-month">
                                        Enero
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">Nuevo loteo de terrenos</a></h6>
                                <p class="post-content"> xxxx xxxxx xxxxx xxxxx xxxx  <br> xxx xxxx</p>
                                <div class="bolg-continue">
                                    <a href="article.html">Saber más  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.2s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="img\blog\2.jpeg" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        08
                                    </span>
                                    <span class="post-month">
                                        Abril
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">Departamento a extrenar</a></h6>
                                <p class="post-content">Saldran al mercado estas nuevas unidades a extrenar </p>
                                <div class="bolg-continue">
                                    <a href="article.html">Saber más  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="img\blog\3.jpeg" alt="">
                                </a>
                                <div class="blog-post">
                                    <span class="post-day">
                                        28
                                    </span>
                                    <span class="post-month">
                                        Junio
                                    </span>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">Nuevo remate publico</a></h6>
                                <p class="post-content">Los intersados comuniquesen con nuestras oficinas </p>
                                <div class="bolg-continue">
                                    <a href="article.html">Saber más  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Latest blog end-->
        <!--Brand section end-->
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
    <script src="js\main.js"></script>
    <script>
        const DetecTipo = function () {
            let T= document.getElementById('Tipo');
            T.addEventListener("change",function (e) {
                if (T.value.indexOf("A")>0){
                    document.getElementById('DivCreditos').style.display="none";
                    document.getElementById('DivMascotas').style.display="block";
                }else{
                    document.getElementById('DivCreditos').style.display="block";
                    document.getElementById('DivMascotas').style.display="none";
                }
            });
        };

        (function () {
            DetecTipo();
        })();
    </script>
</body>

</html>