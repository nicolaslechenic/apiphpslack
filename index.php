<?php

require('vendor/autoload.php');

// $_SERVER['REQUEST_URI']  

// Si mon url != "api-slack-token-nlc.herokuapp.com/"

if($_SERVER['HTTP_HOST'] !=  "api-slack-token-nlc.herokuapp.com") {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}



// Sinon je ne le fais pas

$ary = array("token" => $_ENV['TOKEN'], "uri" => $_SERVER['HTTP_HOST']);
$data = json_encode($ary);

echo($data);