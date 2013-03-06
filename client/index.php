<?php

ini_set('display_errors',1);
ini_set("soap.wsdl_cache_enabled", "0");
error_reporting(-1);

try{
  $sClient = new SoapClient('http://dev.soap-server/default.wsdl');
  
  $sClient->setName('Adam');
  $response = $sClient->sayHello();
  
  var_dump($response);
  
  
} catch(SoapFault $e){
  var_dump($e);
}
?>