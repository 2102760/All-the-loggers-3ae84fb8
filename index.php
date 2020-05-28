<?php

require_once("MyLogger.class.php");
$logger = new MyLogger();
$logger->setOrigin('TestClass');
$logger->log("Hello World", 'warning');
?>