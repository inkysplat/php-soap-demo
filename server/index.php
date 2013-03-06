<?php

ini_set('display_errors',1);
ini_set("soap.wsdl_cache_enabled", "0");
error_reporting(-1);

class HelloWorld
{
	private $yourName = 'James';

	public function __construct()
	{
		$this->yourName = 'Peter';
		return ;
	}

	public function sayHello()
	{
		return 'hello '.$this->yourName;
	}

	public function setName($yourName)
	{
		$this->yourName = $yourName;
	}
}

try {
  $server = new SOAPServer('default.wsdl');
 
  $server->setClass('HelloWorld');
  $server->handle();
}
catch (SOAPFault $f) {
  print $f->faultstring;
}