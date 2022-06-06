<?php
$dbserver = 'localhost';
$dbname = 'tugaspweb_adinda';
$dbuser = 'root';
$dbpassword = '';
$dsn ="mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new PDO($dsn,$dbuser,$dbpassword);
} catch (Exception $exception){
    die("terjadi error : ".$exception->getMessage());
}