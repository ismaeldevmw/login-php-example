<?php 
require_once "../controlador/sessionValidate.php";
require_once "../controlador/sessionUserTypeAdmin.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <!--CSS-->    
    <link rel="stylesheet" href="assets/css/bootstrap-yeti.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body>

    <div id="response"></div>

    <!-- DATATABLE -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-info" onclick="loadUsers()"><i class="fa fa-refresh"></i>&nbsp;Refrescar</a>
            </div>
        </div>
        <div class="row">            
            <div id="mensaje-delete"></div>            
            <h1>Usuarios                
                <a href="" data-toggle="modal" data-target="#myModal"  class="btn btn-success pull-right menu"><i class="fa fa-user-plus " aria-hidden="true"></i>&nbsp;Nuevo usuario</a>
            </h1>  
        </div>
        <div class="row">    
        <table id="example" class="table table-striped table-bordered table-responsive">
            <thead>
            <tr>
                <th>Id</th>
                <th>A. paterno</th>
                <th>A. materno</th>
                <th>Nombre</th>               
                <th>Usuario</th>
                <th>Clave</th>
                <th>Tipo de usuario</th>
                <th>Estado de cuenta</th>
                <th>Fecha de registro</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>A. paterno</th>
                <th>A. materno</th>
                <th>Nombre</th>               
                <th>Usuario</th>
                <th>Clave</th>
                <th>Tipo de usuario</th>
                <th>Estado de cuenta</th>
                <th>Fecha de registro</th>
                <th>Acciones</th>
            </tr>
            </tfoot>
        </table>        
        </div>
    </div>
    <!-- END DATATABLE -->

    <!-- MODAL REGISTER -->
    <div class="modal fade in" id="myModal" >
        <div class="modal-dialog" style="width:50%;">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                    <h4 class="modal-title"><b></b>Registro de usuario</h4>
                </div>
                <div class="modal-body">
                    <div class="row-fluid" id="notificacion"></div>
                    <form id="formregistro"> 
                        <fieldset>
                            <div class="form-group">                            
                                <div class="col-lg-4">
                                    <div class="form-group" id="campoapaterno">
                                        <label class="control-label" for="apaterno">Apellido paterno</label>
                                        <input type="text" class="form-control" id="apaterno" name="apaterno" autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" id="campoamaterno">
                                        <label class="control-label" for="amaterno">Apellido materno</label>
                                        <input type="text" class="form-control" id="amaterno" name="amaterno">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" id="camponombre">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" id="campousuario">
                                        <label class="control-label" for="usuario">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" id="campoclave">
                                        <label class="control-label" for="clave">Clave de acceso</label>
                                        <input type="password" class="form-control" id="clave" name="clave">
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group" id="campoTipo">
                                        <select class="form-control" id="tipo" name="tipo">
                                            <option value="2">Cliente 1</option>
                                            <option value="3">Cliente 2</option>
                                            <option value="1">Administrador</option>                                       
                                        </select>                                    
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group" id="campoStatus">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>                                    
                                    </div>
                                </div>                            
                                <div class="col-lg-4 col-lg-offset-8">
                                    <div class="form-group">
                                         <button type="submit" class="btn btn-primary btn-block">Registrar</button>                                     
                                    </div>
                                </div>
                            </div>   
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">                
                </div>
            </div>
        </div>
     </div>
     <!-- END MODAL REGISTER -->

     <!-- MODAL UPDATE -->
    <div class="modal fade in" id="myModalActualiza" >
        <div class="modal-dialog" style="width:50%;">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b></b>Actualizar usuario</h4>
                </div>
                <div class="modal-body">
                    <div class="row-fluid" id="mensaje"></div>
                    <form id="formactualizar">
                    <div id="contenido-update"></div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL UPDATE -->

    <!--Javascript-->    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap.min.js"></script>          
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/usuariojs.js"></script>
</body>
</html>