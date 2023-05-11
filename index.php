<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);


require_once ('vendor/autoload.php');

//Create and F3 (Fat Fre )
$f3 = Base::instance();


//definr a default route
$f3->route('GET /', function($f3){
    //echo '<h2>Hello world!</h2>';

    $view = new Template();
    echo $view->render('view/pets.html');
});




//Run Fat Free
$f3->run();


