<?php

/**
 * Created by PhpStorm.
 * User: toygan
 * Date: 1/11/18
 * Time: 1:32 PM
 */


//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default rote
$f3->route('GET /', function (){

    $view = new View;
    echo $view->render('views/home.html');

});


//run fat free
$f3->run();

echo "<h1>Toygan Sevim</h1>";

echo "<p>We are learning all about github</p>";