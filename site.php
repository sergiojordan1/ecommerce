<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Hcode\Page;
	
$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");

});
	
 ?>