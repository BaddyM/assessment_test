<?php
$database = 'assessment';
$username = 'baddy';
$password = '@Bekhan12';
$host = 'localhost';

$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo 'Connection unsuccessful';
}