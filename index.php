<?php 
require 'vendor/autoload.php'; // Getting all the libaries composer installed
$f3 = \Base::instance(); // Getting fat free lib
$f3->route('GET /test', // API part (route) if its only a "/" then auto call that funciton ... if you add stuff then add to the URL also
    function() {
        echo 'Hello, world Abdul Chilwan!';
    }
);
$f3->route('GET /inside', // API part (route) if its only a "/" then auto call that funciton ... if you add stuff then add to the URL also
    function() {
        echo 'Hello, world insdide!';
    }
);

class WebPage {
    function display() {
        echo 'This uses OOP .. the function is in another class';
    }
}
  
$f3->route('GET /about','WebPage->display');

$f3->run();


?>