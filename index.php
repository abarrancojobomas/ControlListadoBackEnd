<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();
$app->get('/getList/:valueSeach','getList')->conditions(array('valueSeach'=>'[a-zA-Z0-9]{3,20}'));
$app->run();
function getListado($valueSearch)
{
	
}