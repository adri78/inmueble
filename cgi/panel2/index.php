<?php include_once('data/view2.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de Control</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="../dist/css/site.min.css">
     <link rel="stylesheet" href="../dist/css/style.css">
     <link rel="stylesheet" href="../dist/css/select2.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
      <script src="../js/respond.min.js"></script>

    <![endif]-->
      <script src="../dist/js/jquery.js"></script>


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

          <div class="col-xs-12 col-sm-9 content" id="app">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Ficha de Inmueble</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row" id="Contenido">
                      <div id="ParaEditar">
<?php
     include("job/TPropiedades.php");
?>
                      </div>


                      <style>
                          #ParaEditar{
                              display: none;
                          }
                          thead tr{
                              background: #1e88e5;
                              color:white;
                              font-size: 1.5em;
                              text-align: center;
                          }
                          #Tpro tr:hover{
                              background: rgba(79, 168, 79, 0.58);
                          }
                          .D{
                              color:red;
                              font-family: "Times New Roman";
                          }
                          .D:before{
                              content: "U$s ";
                          }
                          .D:after{
                              content: " Dolares ";
                          }
                          .P{
                              color:darkblue;
                              font-family: 'Montserrat', sans-serif;
                          }
                          .P:before{
                              content: " $  ";
                          }
                          .P:after{
                              content: " Pesos";
                          }
                            .P,.D{
                                text-align: right;
                                float:right;
                            }
                      </style>

                      <div id="EditarTabla">
                          <div class="row" >
                              <div class="col-md-6"></div>
                              <div class="col-md-4">
                                  <div class="input-group form-search">
                                      <input type="text" class="form-control search-query" id="Busca" onkeyup="Filtrar()">
                                      <span class="input-group-btn">
                                         <button data-type="last" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-zoom-in"></span></button>
                                       </span>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                  <a class="btn btn-primary btn-block" onclick="NuevaPropiedad()"> Agragar   </a>
                              </div>

                          </div>



                          <div class="row">
                              <table class="table table-bordered" >
                                  <thead>
                                  <th>Portada</th>
                                  <th>Detalle</th>

                                  </thead>
                                  <tbody id="Tpro">
                                  <tr id="2">
                                      <td><img src="" alt=""></td>
                                  </tr>
                                  </tbody>

                              </table>
                          </div>
                      </div>

                  </div>
              </div><!-- panel body -->
            </div>
        </div><!-- content -->


      </div>
    </div>
    <!--footer-->

<hr>
<style>
    #Tpro img{
        height: 180px;
        width: 230px;
    }
    #Tpro td:nth-child(1){
        width: 180px;
    }
</style>



<?php
    // include("help/Footer.php");
?>
    <script type="text/javascript" src="../dist/js/site.min.js"></script>

<!--
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    function CargarZonas(){
        $.get("./data/dbzonas.php?all" ,function (res) {
            let x;
            if(res.length>5) {
                let tmp = JSON.parse(res);
                let code = '';
                let hay = tmp['ALLData'].length;
                for (x = 0; x < hay; x++) {
                    code += "<option value='" + tmp['ALLData'][x].idz + "'>" + tmp['ALLData'][x].zona + "</option>";
                }
                document.getElementById('Zona').innerHTML = code;
                $('#Zona').select2({
                    placeholder: 'Barrio'
                });
            }
        });
    };
    function CargarTipos(){
        $.get("./data/dbtipos.php?all" ,function (res) {
            let x;
            if(res.length>5) {
                let tmp = JSON.parse(res);
                let code = '';
                let hay = tmp['ALLData'].length;
                for (x = 0; x < hay; x++) {
                    code += "<option value='" + tmp['ALLData'][x].idt + "'>" + tmp['ALLData'][x].tipo + "</option>";
                }
                document.getElementById('Tipo').innerHTML = code;
                $('#Tipo').select2({
                    placeholder: 'Inmueble'
                });
            }
        });
    };
    function CargarDuenio(){
        $.get("./data/dbduenios.php?all" ,function (res) {
            let x;
            if(res.length>5){
                let tmp=JSON.parse(res);
                let code='';
                let hay=tmp['ALLData'].length;
                for(  x=0;x<hay;x++){
                    code += "<option value='"+ tmp['ALLData'][x].iddu + "'>"+ tmp['ALLData'][x].contacto+"</option>";
                }
                document.getElementById('Duenio').innerHTML=code;
                $('#Duenio').select2({
                    placeholder: 'Dueño'
                });
            }
        });
    };
    function CargarOtros(){
        $.get("./data/dbotros.php?all" ,function (res) {
            let x;
            if(res.length>5) {
                let tmp = JSON.parse(res);
                let code = '';
                let hay = tmp['ALLData'].length;
                for (x = 0; x < hay; x++) {
                    code += "<option value='" + tmp['ALLData'][x].ido + "'>" + tmp['ALLData'][x].otros + "</option>";
                }
                document.getElementById('otros').innerHTML = code;
                $('.multiple').select2({
                    placeholder: 'Tiene...'
                });
            }
        });
    };

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script src="../dist/js/select2.full.min.js"></script>

<script type="text/javascript" src="job/editor/js/froala_editor.min.js" ></script>
<script type="text/javascript" src="job/editor/js/plugins/align.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/file.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/image.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/link.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/table.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/save.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/url.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/video.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/help.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/print.min.js"></script>
<script type="text/javascript" src="job/editor/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="job/editor/js/plugins/word_paste.min.js"></script>

<script type="text/javascript" src="../dist/js/Voz.js"></script>

<script>
    function zfill(number, width) {
        var numberOutput = Math.abs(number); /* Valor absoluto del número */
        var length = number.toString().length; /* Largo del número */
        var zero = "0"; /* String de cero */

        if (width <= length) {
            if (number < 0) {
                return ("-" + numberOutput.toString());
            } else {
                return numberOutput.toString();
            }
        } else {
            if (number < 0) {
                return ("-" + (zero.repeat(width - length)) + numberOutput.toString());
            } else {
                return ((zero.repeat(width - length)) + numberOutput.toString());
            }
        }
    }


   function uploadLogo(ima,imput){
        //var inputFileImage = imput;
        var file = imput.files[0];
        var data = new FormData();
        data.append("archivo",file);

        var url="job/uima.php";

        $.ajax({
            url:url,
            type:'POST',
            contentType:false,
            data:data,
            processData:false,
            cache:false
        })
            .done(function( data ) {
                let content = JSON.parse(data);
                ima.setAttribute('src',"../../../" + content.final);
            }) ;
    };
    function uploadGalery(ima,imput,X){
        //var inputFileImage = imput;
        var file = imput.files[X];
        var data = new FormData();
        data.append("archivo",file);

        var url="job/uima.php";

        $.ajax({
            url:url,
            type:'POST',
            contentType:false,
            data:data,
            processData:false,
            cache:false
        })
            .done(function( data ) {
                let content = JSON.parse(data);
                ima.setAttribute('src',"../../../" + content.final);
            }) ;
    };

    const ima1=document.getElementById('ima1');
    const Portada =document.getElementById('Portada');
    Portada.addEventListener("change",function () {
        uploadLogo(ima1,Portada);
    });
    ima1.addEventListener("dblclick",function (e) {
        Portada.click();
    });
    const ima2=document.getElementById('ima2');
    const Plano =document.getElementById('Plano');
    Plano.addEventListener("change",function () {
        uploadLogo(ima2,Plano);
    });
    ima2.addEventListener("dblclick",function (e) {
        Plano.click();
    });

    const BtnGalery= document.getElementById('BtnGalery');
    const Multi=document.getElementById('Multi');
    const Galeria=document.getElementById('Galeria');

    BtnGalery.addEventListener("click",function (e) {
        Multi.click();
    });
    Multi.addEventListener("change",function () {
        let tmp;
       for(let x=0 ; x< Multi.files.length ; x++){
          // print_r( Multi.files[x].name);
           let ID=Math.round((new Date()).getTime() / 1000);
           var node = document.createElement("img");
           node.setAttribute("src", "./ima/sin_imagen.jpg");
           node.setAttribute("id", ID);
           // añade el elemento creado y su contenido al DOM
           Galeria.insertBefore(node, Galeria.childNodes[0]);
           tmp=document.getElementById(ID);
           uploadGalery(tmp,Multi,x);
       }


    });

   function leer(){
        var a=$('#edit').froalaEditor('html.get');
        TextoaVoz(a);
   }
</script>

<script>
    const Ruta="./data/dbPro.php";
 function grabar (){
        const Portada=document.getElementById('ima1').getAttribute("src").slice(9);
        const Plano=document.getElementById('ima2').getAttribute("src").slice(9);
        let LstGaleria=document.getElementById('Galeria').querySelectorAll('img');
        let z=LstGaleria.length;
        if(z>0){
            let temp="";
            for (let x=0 ; x < z ;x++){  temp=temp + LstGaleria[x].getAttribute("src").slice(9)+ "|" ;}
            LstGaleria=temp;
        }else{
            LstGaleria="";
        }
        let Alqui= document.getElementById('Alqui').value;
        let Tipo=document.getElementById('Tipo').value;
        let Zona=document.getElementById('Zona').value;
        let Estado=document.getElementById('Estado').value;
        let Destacados=(document.getElementById('Destacado').checked)? "1":"0";
        let Domicilio=document.getElementById('Domicilio').value.toUpperCase();
        if(Domicilio.length <5 ){
            alert("Falta Domicilio");
            document.getElementById('Domicilio').focus();
            document.getElementById('GrabaPro').style.display='block';
            return;
        }
        let Duenio=document.getElementById('Duenio').value;
        let Credito=document.getElementById('Credito').value;
        let Mascota=document.getElementById('Mascota').value;
        let GMap=document.getElementById('GMap').value;
        let Valor= parseFloat(document.getElementById('Valor').value).toFixed( 2 );
            if( isNaN(Valor)){ Valor=0.00;}
        let Dolar=document.getElementById('Dolar').value;
        let MTotales=parseFloat(document.getElementById('MTotales').value);
        if( isNaN(MTotales)){ MTotales=1;}
        let MCubiertos=parseFloat(document.getElementById('MCubiertos').value);
        if( isNaN(MCubiertos)){ MCubiertos=1;}
        let Habitaciones=document.getElementById('Habitaciones').value;
        let Banios=document.getElementById('Banios').value;
        let Cocheras=document.getElementById('Cocheras').value;
        var Texto=$('#edit').froalaEditor('html.get');
        var IdPro= document.getElementById('Idpro').innerHTML;
        let Otros="";
        let Codigo=document.getElementById('Codigo').value;

        z=$('#otros').select2("val");
        if(z!=null){
            if(z.length>0){
                for(let x=0; x< z.length; x++){Otros=z[x]+"|"+Otros; }
            }
        }

        if(Codigo.length<4){
            if(confirm("Falta Codigo, Generar Codigo Automaticamente?")){
                GeneCodigo();
                Codigo=document.getElementById('Codigo').value;
            }else{
                document.getElementById('Codigo').focus();
                document.getElementById('GrabaPro').style.display='block';
            }
        }

/*********************************************************************************** */

    var Data={M:1,IdPro:IdPro,Codigo:Codigo,Portada:Portada,Plano:Plano,Galeria:LstGaleria,Alqui:Alqui,Tipo:Tipo,Zona:Zona,Estado:Estado,Destacados:Destacados,Domicilio:Domicilio,Duenio:Duenio,Cre:Credito,Mascota:Mascota,GMap:GMap,Valor:Valor,Dolar:Dolar,MTotales:MTotales,MCubiertos:MCubiertos,Habitaciones:Habitaciones,Banios:Banios,Cocheras:Cocheras,Texto:Texto,Otros:Otros};

    console.log(Data);

    $.post(Ruta,Data,function (res) {
        alert("Actulizando Base de Datos");
        document.getElementById('GrabaPro').style.display='block';
        LoadTable();
        ATabla();
    });

/* ******************************************************************************** */

}


 function GeneCodigo() {
   if(confirm("Generar CODIGO Automatico")){
       let Alqui = document.getElementById('Alqui').value;
       let IDs = parseInt(document.getElementById('Idpro').innerText);
       if( isNaN(IDs)){ IDs=0;}
       Codigo=Alqui + document.getElementById('Tipo').options[document.getElementById('Tipo').selectedIndex].text.slice(0,1);;
       Codigo = Codigo + document.getElementById('Zona').options[document.getElementById('Zona').selectedIndex].text.slice(0,1);
       if (IDs < 1){
           $.get( Ruta+"?U",function (res) {
               let tmp = JSON.parse(res);
               const d = tmp['Data'][0];
               Codigo = Codigo + "-" + zfill(d.Ultimo.toString(),5);
               document.getElementById('Codigo').value = Codigo;
           });
       }else{
             Codigo = Codigo + "-" + zfill(IDs ,5);
           document.getElementById('Codigo').value = Codigo;
       }
      // document.getElementById('Codigo').value = Codigo;
    }

 }

</script>

<script>
    var Tpro = document.getElementById("Tpro");


 function VerPro(id){
        $.get( Ruta+"?id="+id ,function (res) {
            let tmp = JSON.parse(res);
            const d=tmp['Data'][0];
            document.getElementById('Idpro').innerText= d.idPro;
            document.getElementById('ima1').setAttribute("src","../../../"+d.Portada);
            document.getElementById('ima2').setAttribute("src","../../../"+d.Plano);
            document.getElementById('Alqui').value= d.Alqui;

            let  Alq=document.getElementById('IsAlqui');
            let Ven=document.getElementById('IsVenta');

            if(d.Alqui =="A"){
                Alq.style.display='block';
                Ven.style.display='none';
                document.getElementById('Mascota').value= d.Mascotas;
            }else{
                Alq.style.display='none';
                Ven.style.display='block';
                document.getElementById('Credito').value= d.Credi;
            }

            $('#Tipo').select2().select2('val',d.TipoID);
            $('#Zona').select2().select2('val',d.ZonaID);
            document.getElementById('Estado').value= d.Estado;
            document.getElementById('Destacado').checked= (d.Destacar == 1 )?  true :  false ;
            document.getElementById('Domicilio').value= d.Domicilio;
            document.getElementById('Duenio').value= d.DuenioID;
            document.getElementById('Codigo').value= d.CodPro;
            document.getElementById('GMap').value= d.Gmap;
            document.getElementById('Valor').value= d.Valor;
            document.getElementById('Dolar').value= d.Dolar;
            document.getElementById('MTotales').value= d.M2;
            document.getElementById('MCubiertos').value= d.MC2;
            document.getElementById('Habitaciones').value= d.Habita.toString();
            document.getElementById('Banios').value= d.Banios.toString();
            document.getElementById('Cocheras').value= d.Cocheras.toString();
            document.getElementById('MTotales').value= d.M2.toString();

            $("#otros").val( d.Comodidades.split("|")).select2();
            $('#edit').froalaEditor('html.set', d.Descript);

            document.getElementById('GMMostrar').style.display = 'block';
            document.getElementById('GMMostrar').setAttribute('src', d.Gmap);

/*  Aca va galeria */ ;
/*  vacio galeria */
            let hay=document.querySelectorAll("#Galeria img");
            let x2= hay.length;
            if(x2){
                for (let x=0 ;x < x2 ; x++ ){
                    Galeria.removeChild(hay[x]);
                }
            }

             hay=d.Galeria.split("|");
             x2=hay.length -1;
            if (x2 > 1){
                for(let x=0 ; x< x2 ; x++){
                    let ID=hay[x].substr(7,10) //"Nombre";
                    var node = document.createElement("img");
                    node.setAttribute("src", "../../../" + hay[x]);
                    node.setAttribute("id", ID);
                    node.setAttribute("title","Eliminar");
                    Galeria.insertBefore(node, Galeria.childNodes[0]);
                }
            }
            ElinarGaleria();

/* Fin faleria */

            AEditar();


        });
    }

 function ElinarGaleria(e) {
     const gale = document.getElementById('Galeria');
     gale.addEventListener("click", function (e) {
         if (e.target.id) {
             if (confirm("Eliminar imagen?")) {
                 const ima = document.getElementById(e.target.id);
                 let respuesta= gale.removeChild(ima);
             }
         }
     });
 }

function LoadTable() {
        $.get( Ruta+"?all" ,function (res) {
            let x;
            if(res.length>5) {
                let tmp = JSON.parse(res);
                let code = '';
                let hay = tmp['ALLData'].length;
                for (x = 0; x < hay; x++) {
                    code += "<tr onclick='VerPro ("+ tmp['ALLData'][x].idPro + ")'><td><img src='../../../" + tmp['ALLData'][x].Portada + "'></td>";
                    code +="<td><h4>  Domicilio: "+tmp['ALLData'][x].Domicilio  +"<br> Zona: "+tmp['ALLData'][x].Barrio + "<br> Inmueble:  "+ tmp['ALLData'][x].TIPO;
                    code +="<br> M² :"+tmp['ALLData'][x].M2+"    Hab : "+tmp['ALLData'][x].Habita + ".-    Ba : "+tmp['ALLData'][x].Banios + ".-    Co : "+tmp['ALLData'][x].Cocheras +" <br> ";

                    code +=  "<hr>  Codigo: "+ tmp['ALLData'][x].CodPro +" - <span style='background-color: yellow;'> "+tmp['ALLData'][x].Espara +" </span> -" ;

                    if (tmp['ALLData'][x].Moneda=="Dolares"){
                        code +="<span class='D'>" +tmp['ALLData'][x].Valor + "</span> ";
                    }else{
                        code +="<span class='P'>"+tmp['ALLData'][x].Valor  + "</span>";

                    }

                    code +="</h4></td></tr>";
                }

            Tpro.innerHTML = code;

            }
        });
}

    function BorrarPro() {
        let id= document.getElementById('Idpro').innerText;
        if (id){
            if(confirm("Borrar este Inmueble?, Seguro?")){
                let id=parseInt(document.getElementById('Idpro').innerText) ;
                $.get( Ruta+"?d="+id ,function (res) {
                    LoadTable();
                    ATabla();
                });
            }
        }
    }

    function NuevaPropiedad() {
        document.getElementById('ima1').setAttribute("src","../../../galery/sin_imagen.jpg");
        document.getElementById('ima2').setAttribute("src","../../../galery/sin_imagen.jpg");
        document.getElementById('Galeria').innerHTML="";
        document.getElementById('Alqui').value="A";
        document.getElementById('Tipo').value=1;
        document.getElementById('Zona').value=1;
        document.getElementById('Estado').value=1;
        document.getElementById('Destacado').checked=false;
        document.getElementById('Domicilio').value="";
        document.getElementById('Duenio').value="";
        document.getElementById('Credito').value=1;
        document.getElementById('Mascota').value=1;
        document.getElementById('GMap').value="";
        document.getElementById('GMMostrar').setAttribute("src","")
        document.getElementById('Valor').value="";
        document.getElementById('Dolar').value=1;
        document.getElementById('MTotales').value="";
        document.getElementById('MCubiertos').value="";
        document.getElementById('Habitaciones').value=1;
        document.getElementById('Banios').value=1;
        document.getElementById('Cocheras').value=0;
        $('#edit').froalaEditor('html.set',"");
        document.getElementById('Idpro').innerHTML="0";
        document.getElementById('Codigo').value="";
        $("#otros").select2('val', [""]);
        AEditar();
   }

</script>
<script>
    const Fitros= document.getElementById('Busca');
    function Filtrar(){
        if(Fitros.value.length > 1){
            let y= document.querySelectorAll('#Tpro tr');
            let y2= document.querySelectorAll('#Tpro td:nth-child(2)');
            let z=y.length;
            let txt= Fitros.value.trim().toUpperCase();
            for(let x=0; x< z; x++){

                if( y2[x].innerText.indexOf(txt) >= 0 ){
                    y[x].style.display='table-row';
                }else{
                    y[x].style.display='none';
                }
            }
        }else{
            let y= document.querySelectorAll('#Tpro tr');
            let z=y.length;
            for(let x=0; x< z; x++){
                y[x].style.display='table-row';
            }
        }
    };
    $(function(){
        CargarZonas();
        CargarTipos();
        CargarDuenio();
        CargarOtros();
        $('#edit').froalaEditor({
            imageUploadURL : 'job/editor/upload_image.php'
        });
        const GraPropiedad = document.getElementById('GrabaPro').addEventListener("click",function (e) {
            document.getElementById('GrabaPro').style.display='none';
            grabar ();
        });

        LoadTable();

    });
</script>

  </body>
</html>
