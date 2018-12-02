
<style>
    .cien{
        width: 100%;
    }
    #Valor,#MTotales,#MCubiertos{
        text-align: right;
        padding-right: 2em;
    }
    label{
        display: block;
    }
    #Destacado +label{
        margin-top: 15px;
        text-align: center;
        font-size: 1.5em;
        padding: 10px 5px;
        border-radius: 10px;
        background: #b2b2b2;
    }
    #Destacado:checked + label {
        background: #28ff58;
    }
    .portadas {
        height: 280px;
        overflow: hidden;
        text-align: center;
        padding-right: 0;
        padding-left: 0;
    }
    .portadas img{
        width: 200px;
        border-radius: 20px;
        min-height:200px;
        margin-bottom: 10px;
    }
    .portadas input,.dropzone input{
        display: none;
    }
    .dropzone {
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
        cursor:pointer;
        min-height: 180px;
        display: flex;
        flex-wrap: wrap;
    }
    .dropzone img{
        width: 100px;
        height: 100px;
        border-radius: 5px;
    }
    .select2 {
        width: 100% !important; ;
    }
</style>

<div class="row" style="background: #cbcbcb">
    <div class="col-md-3 portadas">
        <h5>Portada:</h5>
        <img src="../../../galery/sin_imagen.jpg" id="ima1"><br>
        <input type="file" id="Portada">
    </div>
    <div class="col-md-3 portadas">
        <h5>Plano:</h5>
        <img src="../../../galery/sin_imagen.jpg" id="ima2"><br>
        <input type="file" id="Plano">
    </div>
    <div class="col-md-6">
        <h5>Fotos del Inmueble: <a class="btn btn-primary" id="BtnGalery"> <i class="glyphicon glyphicon-plus-sign"></i> Agregar Fotos</a> </h5>
        <input name="file" type="file" multiple id="Multi"  style="display: none"/>
            <div class="dropzone" id="Galeria">

            </div>
    </div>
</div>

<!-- ****************************************************************  -->
<div class="row">
    <div class="col-md-2">
        <label for="Alqui"> En </label>
        <select name="Alqui" id="Alqui" class="form-control input-sm">
            <option value="A" selected>Alquiler</option>
            <option value="V"> Venta</option>
            <option value="X"> Ambos AoV</option>
        </select>
    </div>

    <div class="col-md-3">
        <label for="Tipo">Inmueble</label>
        <select class="Tipo cien" name="Tipo" id="Tipo">
        </select>
    </div>

    <div class="col-md-3">
        <label for="Zona">Barrio</label>
        <select class="Zona cien" name="Zona" id="Zona">
        </select>
    </div>
    <div class="col-md-2">
        <label for="Estado"> Estado:</label>
        <select name="Estado" id="Estado" class="form-control input-sm">
            <option value="1" selected>ACTIVO</option>
            <option value="2">Suspendido</option>
            <option value="3">En Uso</option>
            <option value="4">Reservada</option>
        </select>
    </div>

    <div class="col-md-2">
        <input type="checkbox" id="Destacado" name="Destacado" style="display: none;" >
        <label for="Destacado"> Destacar </label>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <label for="Domicilio">Dirección</label>
        <input type="text" name="Domicilio" id="Domicilio" class="form-control" placeholder="Dirección">
    </div>
    <div class="col-md-4">
        <label for="Duenio"> Dueño:</label>
        <select name="Duenio" id="Duenio" class="form-control input-sm">
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div id="IsAlqui">
            <label for="Mascota">Acepta Mascotas:</label>
            <select name="Mascota" id="Mascota" class="form-control input-sm">
                <option value="0" selected>Sin Mascotas</option>
                <option value="1" >Acepta</option>
            </select>
        </div>

        <div id="IsVenta" style="display: none;">
            <label for="Credito">Acepto Credito:</label>
            <select name="Credito" id="Credito" class="form-control input-sm">
                <option value="0" selected>Sin Credito</option>
                <option value="1"> Aceptable</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <label for="GMap">Link Google Map</label>
        <input type="text" name="GMap" id="GMap" class="form-control" placeholder="Copiar de google map">
    </div>
    <div class="col-md-4">
        <iframe src=""  id="GMMostrar" frameborder="0" width="100%" style="display: none;" ></iframe>
    </div>

</div>
<div class="row">
    <div class="col-md-2">
        <label for="Valor" class="cien" style="display: block;">Valor</label>
        <input type="number" name="Valor" id="Valor" class="form-control" placeholder="0.00">
    </div>
    <div class="col-md-2">
        <label for="Dolar">Moneda</label>
        <select name="Dolar" id="Dolar" class="form-control input-sm">
            <option value="1">Pesos</option>
            <option value="2">Dolar</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="MTotales">M2 Totales</label>
        <input type="number" name="MTotales" id="MTotales" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="MCubiertos">M2 Cubiertos</label>
        <input type="number" name="MCubiertos" id="MCubiertos" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="Habitaciones">Habitaciones</label>
        <select name="Habitaciones" id="Habitaciones" class="form-control input-sm">
            <option value="0" > Sin </option>
            <option value="1" selected> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10">10</option>
        </select>
    </div>
    <div class="col-md-1">
        <label for="Banios">Baños</label>
        <select name="Banios" id="Banios" class="form-control input-sm">
            <option value="0" > 0</option>
            <option value="1" selected> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
        </select>
    </div>
    <div class="col-md-1">
        <label for="Cocheras">Cocheras</label>
        <select name="Cocheras" id="Cocheras" class="form-control input-sm">
            <option value="0"> Sin </option>
            <option value="1" selected> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
            <option value="7"> 7</option>
            <option value="8"> 8</option>
            <option value="9"> 9</option>
            <option value="10">10</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
         <label>Comodidades:</label>
         <select class="multiple" name="states[]" multiple="multiple" id="otros" style="width: 100%">
          </select>
    </div>

    <div class="col-md-1" style="padding-right: 0;padding-top: 1.8em;">
        <a class="btn btn-primary" onclick="GeneCodigo()" style="float: right;" title="Generar Codigo">CODIGO:</a>
    </div>
    <div class="col-md-2" style="padding-left: 1px;padding-top: 1.8em; ">
        <input type="text" id="Codigo" class="form-control">
    </div>
</div>
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

    <div id="editor">
        <div id='edit' >
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2">
            <button  class="btn btn-info btn-block" onclick="leer()">Leer</button>
        </div>

       <div class="col-md-4">
            <label id="Idpro">0</label>
       </div>
       <div class="col-md-2">
            <a class="btn btn-success btn-block" id="GrabaPro"><i class="glyphicon glyphicon-floppy-save"></i> Grabar </a>
       </div>
       <div class="col-md-2">
            <a class="btn btn-danger btn-block" onclick="BorrarPro()"><i class="glyphicon glyphicon-remove"></i> Borrar </a>
       </div>
       <div class="col-md-2">
            <a class="btn btn-warning btn-block" onclick="ATabla()"><i class="glyphicon glyphicon-arrow-left"></i> Salir </a>
       </div>
    </div>
</div>


<script>

 const MoC = document.getElementById('Alqui').addEventListener("change",function (e) {
     let x=document.getElementById('Alqui').value;
     let  Alq=document.getElementById('IsAlqui');
     let Ven=document.getElementById('IsVenta');
     if(x=="A"){
         Alq.style.display='block';
         Ven.style.display='none';
     }else{
         Alq.style.display='none';
         Ven.style.display='block';
     }
 });
 const gm= document.getElementById('GMap');
 const IFGmap= document.getElementById('GMMostrar');
 const Evgm = gm.addEventListener('change',function () {
     let z="";
     let tmp=gm.value;
     if(gm.value.length >10){
        if( tmp.indexOf("iframe") > 0){
            z=tmp.split('"');
            gm.value= z[1];
            z=z[1];
        }else {
            z = gm.value;
        }
         IFGmap.style.display = 'block';
         IFGmap.setAttribute('src', z);
     }else{
         IFGmap.style.display="none";
     }
 });

 const ATabla = function () {
     document.getElementById("ParaEditar").style.display="none";
     document.getElementById("EditarTabla").style.display="block";
 }
 const AEditar = function () {
     document.getElementById("ParaEditar").style.display="block";
     document.getElementById("EditarTabla").style.display="none";
     document.getElementById('Alqui').focus();
 }

</script>
