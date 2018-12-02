<?php include_once('data/view2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panel de Control-Dueños</title>
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

    <style>
       #app1, .ancho{
           padding-right: 0;
           padding-left: 0;
       }
    </style>
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
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Contacto Propietarios</h3>
                </div>
                <div class="panel-body">
                    <div class="content-row" id="Contenido" style="margin-left: 0px;">
                        <?php
                            include("job/TDuenios.php");
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

<script>
    const btnNuevo=document.getElementById('btnNuevo');
    const EsNuevo= document.getElementById('EsNuevo');
    const EsTel= document.getElementById('EsTel');
    const EsDomicilio= document.getElementById('EsDomicilio');
    const btnBorrar= document.getElementById('btnBorrar');
    const idTemp = document.getElementById('IdTemp');
    const EsEditado= document.getElementById('EsEditado');
    const bTabla=document.getElementById('bTabla');
    const Grabar=document.getElementById('btnGrabar');
    const elDato= document.getElementById('eldato');
    const IdTemp= document.getElementById('IdTemp');
    const ruta="./data/dbduenios.php";
</script>

<script>
    function editar() {
        EsNuevo.style.display='block';
        EsEditado.style.display='block';
        btnNuevo.style.display='none';
        elDato.focus();
    }
    function Salir() {
        EsNuevo.style.display='none';
        btnNuevo.style.display='block';
        EsEditado.style.display='none';
        Cargar();
    }

    const SALIR= document.getElementById('btnSalir').addEventListener("click",function(){
        Salir();
    });
    idTemp.style.display='none';
    EsNuevo.style.display='none';
    const btnNuevoClick= btnNuevo.addEventListener("click",function () {
        EsNuevo.style.display='block';
        EsEditado.style.display='none';
        elDato.value="";
        EsTel.value="";
        EsDomicilio.value="";
        IdTemp.innerText="0";
    });
    const edit= bTabla.addEventListener("click",function () {
        editar();
    });
    const btngrabar=Grabar.addEventListener("click",function () {
        let Data = elDato.value.toUpperCase().trim();
        let tel = EsTel.value.toUpperCase().trim();
        let Domicilio = EsDomicilio.value.toUpperCase().trim();
        let Id=IdTemp.innerText;
        let d={Dato:Data,ID:Id,Tel:tel,Domicilio:Domicilio};
        if (Data.length > 2){
            $.post(ruta,d,function (res) {
                alert("Grabado");
                Salir();
            });

        }else{
            alert('Falta información ' );
            elDato.focus();
        }
    });

    const Borrar= btnBorrar.addEventListener("click",function () {
        if(IdTemp.innerText.length >0 ){
            if(confirm("Esta por borrar un item,Seguro?")){
                $.get(ruta + "?d=" + IdTemp.innerText, function (res) {
                   alert("Actulizado");
                   Salir();
                });
            }
        }
    })

    function Cargar(){
        $.get(ruta +"?all" ,function (res) {
            let x;
            if(res.length>5){
                let tmp=JSON.parse(res);
                let code='';
                let hay=tmp['ALLData'].length;
                for(  x=0;x<hay;x++){
                    code += "<tr onclick='ver("+ tmp['ALLData'][x].iddu + ")'><td>"+ tmp['ALLData'][x].contacto+"</td><td>"+ tmp['ALLData'][x].tel +"</td><td>"+ tmp['ALLData'][x].domicio+"</td></tr>";
                }
                bTabla.innerHTML=code;
            }
        });
    }; // Fin carga

    function ver(id) {
        console.log("Buscar");
        elDato.value ="";
            $.get(ruta + "?id=" + id, function (res) {
            let tmp = JSON.parse(res);
            console.log(tmp);
            IdTemp.innerText = tmp['Data'][0].iddu;
                console.log(tmp['Data'][0].iddu);
            elDato.value = tmp['Data'][0].contacto;
                console.log(tmp['Data'][0].contacto);
            EsTel.value = tmp['Data'][0].tel;
            EsDomicilio.value = tmp['Data'][0].domicio;
                 console.log(tmp['Data'][0].domicio);
            editar();
        });
    }; // editor
    const Fitros= document.getElementById('Busca');

    function Filtrar(){
        if(Fitros.value.length > 1){
            let y= document.querySelectorAll('#bTabla tr');
            let z=y.length;
            let txt= Fitros.value.trim().toUpperCase();
            for(let x=0; x< z; x++){
                if( y[x].innerText.indexOf(txt) >= 0 ){
                    y[x].style.display='table-row';
                }else{
                    y[x].style.display='none';
                }
            }
        }else{
            let y= document.querySelectorAll('#bTabla tr');
            let z=y.length;
            for(let x=0; x< z; x++){
                y[x].style.display='table-row';
            }
        }
    };
    (function () {
        Cargar();
    })();
</script>

</body>
</html>