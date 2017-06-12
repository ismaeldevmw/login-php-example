<?php

class Notification { 

	public function registeredRecord($result) {
		if($result != false){
		  $mensaje = '<div class="alert alert-dismissible alert-success">
		              <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <strong>¡Ok!</strong> Registrado correctamente.
		            </div>';         
		} else {
		  $mensaje = '<div class="alert alert-dismissible alert-warning">
		              <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <strong>¡Error!</strong> Inténtalo de nuevo.
		            </div>';                    
		}
		return $mensaje;
	}   


    public function updatedRecord($result) {
    	if($result != false){
    	  $mensaje = '<div class="alert alert-dismissible alert-info">
    	              <button type="button" class="close" data-dismiss="alert">&times;</button>
    	              <strong>¡Ok!</strong> Cambios guardados correctamente.
    	            </div>';         
    	} else {
    	  $mensaje = '<div class="alert alert-dismissible alert-warning">
    	              <button type="button" class="close" data-dismiss="alert">&times;</button>
    	              <strong>¡Error!</strong> Inténtalo de nuevo.
    	            </div>';                    
    	}
    	return $mensaje;
    }

     public function deletedRecord($result){
       	if($result != false){
	        $mensaje = '<div class="alert alert-dismissible alert-success">
	                    <button type="button" class="close" data-dismiss="alert">&times;</button>
	                    <strong>¡Ok!</strong> Registro eliminado correctamente.
	                  </div>';         
     	 } else {
	        $mensaje = '<div class="alert alert-dismissible alert-warning">
	                    <button type="button" class="close" data-dismiss="alert">&times;</button>
	                    <strong>¡Error!</strong> Inténtalo de nuevo.
	                  </div>';                    
      	}
      	return $mensaje;
    }	
    
    public function existsUser(){
    	$mensaje = '<div class="alert alert-dismissible alert-danger">
    	            <button type="button" class="close" data-dismiss="alert">&times;</button>
    	            <strong>!Parece que el usuario ya existe!</strong> Elige otro e intentalo de nuevo.
    	          </div>';
    	return $mensaje;
    }

    public function disableUser(){
    	$mensaje='<div class="alert alert-dismissible alert-info">
    	          <button type="button" class="close" data-dismiss="alert">&times;</button>
    	          <strong>¡Opps!</strong> La cuenta de usuario esta inhabilitada.</a>
    	        </div>';
    	return $mensaje;
    }

    public function incorrectCredentials() {
		$mensaje='<div class="alert alert-dismissible alert-warning">
		    	   <button type="button" class="close" data-dismiss="alert">&times;</button>
		    	   <strong>Error!</strong> Usuario y/o clave incorrectos, intentalo de nuevo.
		    	  </div>';
		return $mensaje;
    }

    public function requiredFields() {
    	 $mensaje=' <div class="alert alert-dismissible alert-danger">
			    	 <button type="button" class="close" data-dismiss="alert">&times;</button>
			    	 <strong>¡ERROR!</strong> Completa todos los campos e intentalo de nuevo.</p>
			    	</div>';
		return $mensaje;
    }
}
?>