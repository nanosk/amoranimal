<?php 
App::uses('AppHelper', 'View/Helper');

class ConvertdatosHelper extends AppHelper {
    public $helpers = array('Html');

    public function fechaDMY($fecha) {
		//recibe fecha YYYY-MM-DD
        // Use the HTML helper to output
        // formatted data:
		$dia = substr($fecha,8,2);
		$mes = substr($fecha,5,2);
		$anio = substr($fecha,0,4);
		$fecha1 = "$dia/$mes/$anio";
        return $fecha1;
    }
    
    public function booltexto($valor){
        $respuesta = 'NO';
        if($valor==true){
            $respuesta = 'SI';
            
        }
        return $respuesta;
    }
    
	
	
}

?>