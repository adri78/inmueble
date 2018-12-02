<style>
    #btnNuevo,#btnBorrar,#btnSalir,#btnGrabar{
        margin-top: 1em;
    }
    #EsEditado{
        padding-bottom: 1.5em;
    }
    .ttitulo{
        background: #37BC9B;;
        color:white;
        font-size: 1.3em;
    }
    #bTabla tr:hover{
        background: #A0D468 !important;
    }

</style>
<div class="col-xs-8 ancho">
    <div class="cabeTabla">

        <h4 class="CeluOculto"> DUEÑOS </h4>
        <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 320px;">
                <input type="text" name="table_search" id="Busca" placeholder="Buscar" onkeyup="Filtrar()" class="form-control pull-right">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default" id="idBusca" onclick="Filtrar()"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="table table-bordered table-responsive "> <!-- CScroll -->
        <table class="table table-hover">
            <thead>
                <tr class="ttitulo">
                    <th>Contacto </th>
                    <th>Tel </th>
                    <th>Domicilio </th>
                </tr>
            </thead>

            <tbody id="bTabla">
                <tr> <td></td> </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="col-xs-4 ancho" style="padding-left: 10px;">
    <button type="button" class="btn btn-primary btn-block" id="btnNuevo"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
    <div id="EsNuevo" style="display:none">
        <p id="IdTemp">0</p>
       <h3><label for="EsTel">Contacto:</label></h3>
        <input type="text" name="eldato" id="eldato" placeholder="Contacto " class="col-xs-12 form-control input-sm">
        <br><br>
        <label for="EsTel"> Telefono/ Cel</label>
        <div class="col-xs-12">
            <div class="stepper ">

                <input type="number" class="form-control stepper-input" id="EsTel" name="EsTel"><span class="stepper-arrow up">Up</span><span class="stepper-arrow down">Down</span>
            </div>
        </div>
        <br>
        <label for="EsDomicilio">Domicilio:</label>
        <input type="text" name="EsDomicilio" id="EsDomicilio" placeholder="Viven en... " class="col-xs-12 form-control input-sm">
        <hr>
            <div id="EsEditado">
                    <button type="button" id="btnBorrar" class="btn btn-danger col-xs-6"><i class="glyphicon glyphicon-remove"></i> Borrar</button>
                    <button type="button" id="btnSalir" class="btn btn-warning col-xs-6"><i class="glyphicon glyphicon-share"></i> Salir</button>
            </div>
        <hr>
        <button type="button" id="btnGrabar" class="btn btn-success btn-block" style="margin-top: 10px;"><i class="glyphicon glyphicon-floppy-save"></i> Grabar</button>
        </div>
    </div>
</div>




