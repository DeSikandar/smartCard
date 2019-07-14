<?php

$dbname="Smartcard.db";

$db=new PDO('sqlite:'.$dbname);

if(!$db){
    die("Database not Created !");
}

session_start();	


?>