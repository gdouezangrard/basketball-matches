<?php

$config = array(
    "db" => array(
        "dbname" => "basket",
        "username" => "user",
        "password" => "password",
        "host" => "localhost"
    ),
    "url" => "http://" . $_SERVER['SERVER_NAME']
);

defined("MODULES_PATH")
    or define("MODULES_PATH", realpath(dirname(__FILE__) . '/modules'));

defined("MODELS_PATH")
    or define("MODELS_PATH", realpath(dirname(__FILE__) . '/models'));

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

?>
