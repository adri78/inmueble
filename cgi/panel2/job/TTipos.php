<style>
    #btnNuevo,#btnBorrar,#btnSalir,#btnGrabar{
        margin-top: 1em;
    }
    #EsEditado{
        padding-bottom: 1.5em;
    }
    .ttitulo{
        background: #CCD1D9;
        color:white;
        font-size: 1.3em;
    }
    #bTabla tr:hover{
        background: #A0D468 !important;
    }

</style>
<div class="col-xs-8">
    <div class="cabeTabla">
        <h4 class="CeluOculto">Tipo de inmueble</h4>
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
                <tr>
                    <th class="ttitulo">(Casa / Local / Terrenos / Galpones ) </th>
                </tr>
            </thead>

            <tbody id="bTabla">
                <tr> <td></td> </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="col-xs-4">
    <button type="button" class="btn btn-primary btn-block" id="btnNuevo"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
    <div id="EsNuevo" style="display:none">
        <p id="IdTemp">0</p>
        <input type="text" name="eldato" id="eldato" placeholder="Escriba aqui" class="col-xs-12">
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




