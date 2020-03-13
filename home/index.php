<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//error_reporting(E_ALL & ~E_NOTICE);

$mc = new Memcached();
$mc->addServer("memcached", 11211);

$mc->set("foo", "Hello!");
$mc->set("bar", "Memcached......");

$arr = array(
    $mc->get("foo"),
    $mc->get("bar")
);


var_dump($arr);
// phpinfo();
echo "tung a";