<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require "Saludo.php";
    $serverURL = "http://localhost/dwes/soap/serversoap.php";
    if(isset($_GET['wsdl'])) {
        $soapAutoDiscover = new \Zend\Soap\AutoDiscover(
            new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence()
        );
        $soapAutoDiscover->setBindingStyle(array('style' => 'document'));
        $soapAutoDiscover->setOperationBodyStyle(array('use' => 'literal'));
        $soapAutoDiscover->setClass('Saludo');
        $soapAutoDiscover->setUri($serverURL);
        header("Content-Type: text/xml");
        echo $soapAutoDiscover->generate()->toXML();
    } else {
        $soap = new \Zend\Soap\Server($serverURL.'?wsdl');
        $soap->setObject(new \Zend\Soap\Server\DocumentLiteralWrapper(
            new Saludo()));
        $soap->handle();
    }
?>