<?php

require('vendor/autoload.php');

// $_SERVER['REQUEST_URI']  

// Si mon url != "api-slack-token-nlc.herokuapp.com/"

if($_SERVER['HTTP_HOST'] !=  "api-slack-token-nlc.herokuapp.com") {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}



// Sinon je ne le fais pas

if($_SERVER['HTTP_REFERER'] == "https://masuperapislack.netlify.app/") {
  $ary = array("token" => $_ENV['TOKEN']);
  $data = json_encode($ary);
} else {
  $ary = array("token" => "Encore une victoire de canard");
  $data = json_encode($ary); 
}



echo($data);