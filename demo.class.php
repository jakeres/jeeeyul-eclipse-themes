<?php

// Using a named function
function autoload_class($class){
    include_once('includes/' . $class . '.class.php');
}
spl_autoload_register('autoload_class');

// Using an anonymous function
spl_autoload_register(function($class){
    include_once('includes/' . $class . '.class.php')
});