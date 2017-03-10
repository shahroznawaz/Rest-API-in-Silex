<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();
$capsule->addConnection([
    "driver"     => "mysql",
    "host"       => "localhost",
    "database"   => "silex",
    "username"   => "root",
    "password"   => "",
    "charset"    => "utf8",
    "collation"  => "utf8_general_ci"
]);

$capsule->bootEloquent();

?>