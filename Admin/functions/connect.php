<?php

define("SERVER","localhost");
define("USER","root");
define("PASSWORD","");
define("db_name","training");

$connect = new mysqli(SERVER,USER,PASSWORD,db_name);

//$connect->

if(!$connect){
    echo "not connected";
}