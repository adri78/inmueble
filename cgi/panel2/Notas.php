<?php include_once('data/view2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panel de Control-Zonas</title>
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



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="job/editor/css/froala_editor.css">
    <link rel="stylesheet" href="job/editor/css/froala_style.css">
    <link rel="stylesheet" href="job/editor/css/plugins/code_view.css">
    <link rel="stylesheet" href="job/editor/css/plugins/draggable.css">
    <link rel="stylesheet" href="job/editor/css/plugins/colors.css">
    <link rel="stylesheet" href="job/editor/css/plugins/emoticons.css">
    <link rel="stylesheet" href="job/editor/css/plugins/image_manager.css">
    <link rel="stylesheet" href="job/editor/css/plugins/image.css">
    <link rel="stylesheet" href="job/editor/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="job/editor/css/plugins/table.css">
    <link rel="stylesheet" href="job/editor/css/plugins/char_counter.css">
    <link rel="stylesheet" href="job/editor/css/plugins/video.css">
    <link rel="stylesheet" href="job/editor/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="job/editor/css/plugins/file.css">
    <link rel="stylesheet" href="job/editor/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="job/editor/css/plugins/help.css">
    <link rel="stylesheet" href="job/editor/css/third_party/spell_checker.css">
    <link rel="stylesheet" href="job/editor/css/plugins/special_characters.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">




    <script src="../dist/js/jquery.js"></script>
    <script src="../dist/js/select2.full.min.js"></script>
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
                    <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Publicaciónes Inmoviliarias</h3>
                </div>
                <div class="panel-body">
                    <div class="content-row" id="Contenido">
                        <?php
                            include("job/TNotas.php");
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

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



<script type="text/javascript" src="../dist/js/site.min.js"></script>





<script>
    const btnNuevo=document.getElementById('btnNuevo');
    const EsNuevo= document.getElementById('EsNuevo');
    const btnBorrar= document.getElementById('btnBorrar');
    const idTemp = document.getElementById('IdTemp');
    const EsEditado= document.getElementById('EsEditado');
    const bTabla=document.getElementById('bTabla');
    const Grabar=document.getElementById('btnGrabar');
    const elDato= document.getElementById('eldato');
    const IdTemp= document.getElementById('IdTemp');


    const ruta="./data/dbNotas.php";
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
        IdTemp.innerText="0";
    });
    const edit= bTabla.addEventListener("click",function () {
        editar();
    });
    const btngrabar=Grabar.addEventListener("click",function () {
        let Data = elDato.value.toUpperCase().trim();
        let Id=IdTemp.innerText;
        let d={Dato:Data,ID:Id};
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
            if(res.length>5) {
                let tmp = JSON.parse(res);
                let code = '';
                let hay = tmp['ALLData'].length;
                for (x = 0; x < hay; x++) {
                    code += "<tr><td onclick='ver(" + tmp['ALLData'][x].idz + ")'>" + tmp['ALLData'][x].zona + "</td></tr>";
                }
                bTabla.innerHTML = code;
            }
        });
    }; // Fin carga

    function ver(id) {
        $.get(ruta + "?id=" + id, function (res) {
            let tmp = JSON.parse(res);
            elDato.value = tmp['Data'][0].zona;
            IdTemp.innerText = tmp['Data'][0].idz;
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



</script>

<script>

    $(function() {
        $.getScript("job/editor/js/froala_editor.min.js", function () { $( "#editor" ).froalaEditor({  }); });

        //$('#editor').froalaEditor();
    });

</script>
</body>
</html>