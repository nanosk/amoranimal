<?php 

    //require_once('../nusoap/lib/nusoap');
App::import('Vendor','nusoap/lib/nusoap');	
	$server = new soap_server();
	$server->configureWSDL('Mi Web Service #1', 'urn:mi_ws1','http://localhost/AdminClientes/pruebas?wsdl');
	// Parametros de entrada
	$server->wsdl->addComplexType(  'datos_persona_entrada', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('nombre'   => array('name' => 'nombre','type' => 'xsd:string'),
                                      'email'    => array('name' => 'email','type' => 'xsd:string'),
                                      'telefono' => array('name' => 'telefono','type' => 'xsd:string'),
                                      'ano_nac'  => array('name' => 'ano_nac','type' => 'xsd:int'))
	);
	/// Parametros de Salida
	$server->wsdl->addComplexType(  'datos_persona_salidad', 
                                'complexType', 
                                'struct', 
                                'all', 
                                '',
                                array('mensaje'   => array('name' => 'mensaje','type' => 'xsd:string'))
	);
         
             
	$server->register(  'calculo_edad', // nombre del metodo o funcion
                    array('datos_persona_entrada' => 'tns:datos_persona_entrada'), // parametros de entrada
                    array('return' => 'tns:datos_persona_salidad'), // parametros de salida
                    'urn:mi_ws1', // namespace
                    'urn:hellowsdl2#calculo_edad', // soapaction debe ir asociado al nombre del metodo
                    'rpc', // style
                    'encoded', // use
                    'La siguiente funcion recibe los parametros de la persona y calcula la Edad' // documentation
);


function calculo_edad($datos) {
    $edad_actual = date('Y') - $datos['ano_nac'];
    $msg = 'Hola, ' . $datos['nombre'] . '. informacion procesada ' . $datos['email'] . 
	', telefono'. $datos['telefono'].' y su Edad actual es: ' . $edad_actual . '.'; 
    return array('mensaje' => $msg);
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);





?>