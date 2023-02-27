<?php
    require_once __DIR__.'/vendor/autoload.php';
    $wsdl = "http://localhost/dwes/soap/serversoap.php?wsdl";
    $cliente = new \Zend\Soap\Client($wsdl);
    $result = $cliente->hola(['nombre'=>'Pepe']);
    echo "<h2>{$result->holaResult}</h2>";
    $resultado = $cliente->alreves(['cadena'=>'hola']);
    echo "<h2>{$resultado->alrevesResult}</h2>";
?>