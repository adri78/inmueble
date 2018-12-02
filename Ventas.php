<?php
$description="Buscas vender? Buscas Comprar?. Mainetti Propiedades es tu respuesta. Respetamos tu inversión... ";
include "Header.php";
?>
        <!--Header section end-->
<style>
    #VerPropiedades .property-desc-top{
        min-height: 100px;
    }
    #VDestacada .single-property,#VNovedad .single-property{
        height: 100% ;
        min-height: 211px !important;

    }
    #ProDestacar .property-img  img, #VNovedad .property-img img{
        min-height: 125px !important;
    }

</style>
        <!--Breadcrumbs start-->
        <div class="breadcrumbs overlay-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumbs-title text-center">
                                <h1>Ventas</h1>
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
                <div class="row">
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="sidebar left">
                            <aside class="single-side-box search-property">
                                <div >
                                    <div class="aside-title">
                                        <h5>Codigo:</h5>
                                    </div>
                                    <div class="find-home-item custom-select">
                                        <input type="text"  class="form-control input" placeholder="Ya tengo el codigo" id="Codigo" onchange="Filtrar()" style="text-align: center"  >
                                        <div style="padding-bottom: 3em;"></div>
                                    </div>
                                </div>

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
                                                            <select class="selectpicker" title="Tipo" data-hide-disabled="true" data-live-search="true" id="Tipo" onchange="Filtrar()">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option value="">Hidden</option>
                                                                </optgroup>
                                                                <option value="" > No definido </option>
                                                                <optgroup label="En Venta">
                                                                    <?php echo $TiposV; ?>
                                                                </optgroup>
                                                                <optgroup label="Alquiler opción de Venta">
                                                                    <?php echo $TiposX; ?>
                                                                </optgroup>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">                  
                                                            <select class="selectpicker" title="Zona" data-hide-disabled="true" data-live-search="true" id="Zona" onchange="Filtrar()">
                                                                <optgroup disabled="disabled" label="disabled">
                                                                    <option value="0">Hidden</option>
                                                                </optgroup>
                                                                <optgroup label="Zona">
                                                                    <?php echo $Zona; ?>
                                                                </optgroup>
                                                            </select>
                                                        </div> 
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Cochera" data-hide-disabled="true" id="Cochera" onchange="Filtrar()">
                                                                <optgroup label="">
                                                                    <option value="0">Sin Cochera</option>
                                                                    <option label="1" value="1">Con Cochera</option>

                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Ambientes" data-hide-disabled="true" id="Habita" onchange="Filtrar()">
                                                                <optgroup label="">
                                                                    <option label="1" value="1">Mono Ambientes</option>
                                                                    <option value="2">2 Ambientes</option>
                                                                    <option value="3">3 Ambientes</option>
                                                                    <option value="4">4 Ambientes</option>
                                                                    <option value="5">+4 Ambientes</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="find-home-item  custom-select">
                                                            <select class="selectpicker" title="Baños" data-hide-disabled="true" id="Banios" onchange="Filtrar()">
                                                                <optgroup label="">
                                                                    <option label="1" value="1">1 Baño</option>
                                                                    <option value="2">2 Baños</option>
                                                                    <option value="3">3 Baños</option>
                                                                    <option value="4">+3 Baños</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="find-home-item custom-select">
                                                            <select class="selectpicker" title="Moneda" data-hide-disabled="true" id="Moneda" onchange="Filtrar()">
                                                                <optgroup label="">
                                                                    <option value="0">Indistinto</option>
                                                                    <option value="1">$ Pesos</option>
                                                                    <option value="2">U$s Dolares</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-6">
                                                        <div class="find-home-item custom-select">
                                                            <select class="selectpicker" title="Apto Credito" data-hide-disabled="true" id="Credito" onchange="Filtrar()">
                                                                <optgroup label="">
                                                                    <option value="0">No determinado</option>
                                                                    <option value="1">Si -Apto </option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>                                                   
                                                    <div class="col-md-12">
                                                        <label for="Maximo" class="col-sm-6 col-xs-12" style="margin-top:1em;text-align:right ;">Pagar hasta:</label>
                                                        <input type="number" class="col-sm-6 col-xs-12" id="Maximo" placeholder="Maximo" name="Maximo" onchange="Filtrar()">
                                                    </div>


                                                    <div class="find-home_bottom">
                                                        <div class="col-md-12">
                                                          
                                                            <div class="find-home-item">
                                                               <button type="button" onclick="function (e) {e.preventDefault();}"> VER </button>
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
                                    <div class="row" id="ProDestacar">

                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box feature" id="VNovedad">
                                <div class="aside-title">
                                    <h5>Novedades</h5>
                                </div>

                                <div class="feature-property">
                                    <div class="row" id="LosUltimos">

                                    </div>
                                </div>
                            </aside>
                            
                        </div>
                    </div>

<!-- ----------------------------------------------------------------- -->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row" id="VerPropiedades">

                        </div>

                        <style>
                            #PTotal{
                                background: #cfcfcf;
                                border-radius: 10px;
                                padding: 10px 15px;
                            }
                            .bMas{
                                padding: 8px 20px 32px 20px;
                                background: #ffc400;
                                width: auto !important;
                                border-radius: 10px;
                                color:white !important;
                                transition: 2s;
                                transform: scale(1.1);

                            }
                            .bMas a{
                                color:white !important;
                            }
                            .bMas:hover{
                                background: #e67f11;
                                box-shadow: 10px 10px #1a1a1a;
                            }
                        </style>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination">
                                    <div class="pagination-inner text-center">
                                        <ul>
                                            <!--
                                            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>next
                                            -->
                                            <li class="current" id="ActualVe">1</li>
                                              de  <span id="PTotal"> 001</span>
                                            <li id="BPMas"><a class="btn bMas" onclick="VerPro(tmp1);"> Ver Más + </a></li>
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

    <!-- All jquery file included here -->
    <script src="js\vendor\jquery-1.12.0.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\jquery.nivo.slider.pack.js"></script>
    <script src="js\jquery.counterup.min.js"></script>
    <script src="js\ajax-mail.js"></script>
    <script src="js\owl.carousel.min.js"></script>
    <script src="js\jquery.magnific-popup.js"></script>
    <script src="js\style-customizer.js"></script>
    <script src="js\plugins.js"></script>
    <script src="js\main.js"></script>


<script>
function Destacados(lst,Mostrar) {
    let tmp = lst.reverse().filter(function (f) {
            return f.Destacar == 1
    });
    const hay = tmp.length;
    let y;
    if (hay < Mostrar){
        y = hay;
    }else{
        y= hay - Mostrar;
    }

    if(y <0){
         y=0;
     }
   let code="";
   for( let x= 0; x < y; x++){
         code=code +'<div class="col-md-6 col-sm-6 col-xs-6"><div class="single-property"><div class="property-img">';
         code=code +'<a href="Inmueble.php?I='+ tmp[x].idPro +'"><img src="'+ tmp[x].Portada + '"></a></div><div class="property-desc text-center">';
         code=code + '<div class="property-desc-top"><h6><a href="Inmueble.php?I='+ tmp[x].idPro +'">'+tmp[x].TIPO+', '+tmp[x].Barrio+'</a></h6>' ;
         code=code + '<h4 class="price">'+ tmp[x].Valor+'</h4></div></div></div></div>';
   }
     document.getElementById('ProDestacar').innerHTML=code;
 }

function LosUltimos(lst,Mostrar) {
    let tmp = lst ; // lst.reverse()
    let code="";
    let hay = tmp.length  ;
   if(hay <0){
        hay=0;
   }

    for( let x= 0 ; x < hay ; x++){
        code=code +'<div class="col-md-6 col-sm-6 col-xs-6"><div class="single-property"><div class="property-img">';
        code=code +'<a href="Inmueble.php?I='+ tmp[x].idPro +'"><img src="'+ tmp[x].Portada + '"></a></div><div class="property-desc text-center">';
        code=code + '<div class="property-desc-top"><h6><a href="Inmueble.php?I='+ tmp[x].idPro +'">'+tmp[x].TIPO+', '+tmp[x].Barrio+'</a></h6>' ;
        code=code + '<h4 class="price">'+ tmp[x].Valor+'</h4></div></div></div></div>';

    }
    document.getElementById('LosUltimos').innerHTML=code;
}
</script>



<script>
    var ProAll;
    let filtrado;
    <!-- Mostrar -->

    let Ult=0;
    let Mostrar=1;

    <!-- -->




    function VerPro(List){

        let x;
        let code = '';
        let hay = List.length;
        let y= Ult +Mostrar;
        if (hay <y){
            y=hay;
        }
        if (hay > 0){
            for (x = Ult; x < hay; x++) {
                code=code+'<div class="col-md-6 col-sm-6 col-xs-12"><div class="single-property mb-40"><span>'+List[x].CodPro  +'</span>';
                code=code+'<div class="property-img"> <a href="Inmueble.php?I='+ List[x].idPro  +'"><img src="'+ List[x].Portada + '" alt="'+List[x].Domicilio+'"></div><div class="property-desc"></a><div class="property-desc-top">';
                code=code+'<h6><a href="Inmueble.php?I='+List[x].idPro +'">'+List[x].Domicilio+'</a></h6><h4 class="price">'+ List[x].Valor+'</h4>';
                code=code+'<div class="property-location"><p><img src="img\\property\\icon-5.png">'+ List[x].Barrio+'</p></div></div>'
                code=code+'<div class="property-desc-bottom"><div class="property-bottom-list"><ul><li><img src="img\\property\\icon-1.png"><span>'+List[x].M2 +' M2</span></li>';
                code=code+'<li><img src="img\\property\\icon-2.png"><span>'+List[x].Habita +'</span></li><li><img src="img\\property\\icon-3.png"><span>'+List[x].Banios+'</span></li>';
                code=code+'<li><img src="img\\property\\icon-4.png"><span>'+ List[x].Cocheras+'</span></li></ul></div></div> </div></div></div>';
            }
            document.getElementById('ActualVe').innerText=x;
            Ult=x;
        }else{
            code="<style> h1{ text-align: center;}   h1 a{ color:#4caf50;} </style>"
            code= code+'<h1> No encontramos propiedades que cumplan con todos los filtros </br>  Pero puede <a href="#sucribirse"> sucribirse</a>  y apenas se incriba un inmueble nos cumonicaremos  </br> o <a href="javascript:location.reload()">volver a buscar </a>  </h1>';
        }


        document.getElementById('VerPropiedades').innerHTML=code;
    }

    function Filtrar() {
        let tmp1=ProAll;
        let tmp ;
        let x;

        let Zona=document.getElementById('Zona').value;

        if( Zona > 0 ) {
            tmp = tmp1.filter(function (f) {
                return f.ZonaID == Zona
            });
            tmp1=tmp;
        }

        let Cochera=document.getElementById('Cochera').value;

        if( Cochera > 0 ) {
            tmp = tmp1.filter(function (f) {
                return f.Cocheras >= Cochera
            });
            tmp1=tmp;
        }

        let Banio=document.getElementById('Banios').value;

        if( Banio > 0 ) {
            tmp = tmp1.filter(function (f) {
                return f.Banios >= Banio
            });
            tmp1=tmp;
        }

        let Codigo= document.getElementById('Codigo').value.toUpperCase();;
        if( Codigo !="" ) {
            tmp = tmp1.filter(function (f) {
                return f.CodPro == Codigo
            });
            tmp1=tmp;
        }

        let Tipo=document.getElementById('Tipo').value;
        if( Tipo !="" ) {
            tmp = tmp1.filter(function (f) {
                return ( (f.TIPO +"-V") == Tipo || (f.TIPO +"-X") == Tipo)
            });
            tmp1=tmp;
        }

        let Habita=document.getElementById('Habita').value;
        if( Habita > 1 ) {
            tmp = tmp1.filter(function (f) {
                return  f.Habita >= Habita
            });
            tmp1=tmp;
        }

        let Moneda=document.getElementById('Moneda').value;
        if( Moneda  > 0) {
            tmp = tmp1.filter(function (f) {
                if(Moneda == 1){
                    return  f.Moneda == "Pesos"
                }
                if(Moneda == 2){
                    return  f.Moneda == "Dolares"
                }
            });
            tmp1=tmp;
        }

        let Credito=document.getElementById('Credito').value;
        if( Credito  > 0) {
            tmp = tmp1.filter(function (f) {
                return  f.Credi== "1"
            });
            tmp1=tmp;
        }

        let Maximo=document.getElementById('Maximo').value;
        if( Maximo  > 0) {
            tmp = tmp1.filter(function (f) {
                return  f.Valor <= Maximo
            });
            tmp1=tmp;
        }



        VerPro(tmp1);
        console.log(tmp1)
    }


 const CargarPro = function (){
      $.get("visor.php?V" ,function (res) {
            if(res.length>5) {
               ProAll = JSON.parse(res);
                ProAll= JSON.parse(JSON.stringify(ProAll.ALLData));
                document.getElementById('PTotal').innerText=ProAll.length;
                Filtrar(ProAll);
                Destacados(ProAll,6);
                LosUltimos(ProAll,6);
            }
       });
 };


    (function () {
        CargarPro();

    })();

</script>


</body>

</html>