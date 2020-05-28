<?php

require_once("MyLogger.class.php");
$logger = new MyLogger('TestClass');
$logger->log("Hello World", 'warning');

$logger2 = new MyLogger('TestClass2');
$logger2->log("Hello World", 'warning');
?>
