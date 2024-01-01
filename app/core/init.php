<?php

// spl_autoload_register('myloader');

// function myloader()
// {
//     echo "here";
// }

spl_autoload_register(function ($class_name){
    require "../app/models/". $class_name.".php";
});

// used to store all the required php files inside a particular file instead of putting all in index.php file.
require "../app/core/config.php";
require "../app/core/functions.php";
require "../app/core/database.php";
require "../app/core/controller.php";
require "../app/core/app.php";