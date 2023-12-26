<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'iskommunity';
$port = 3307;

$conn = new mysqli($hostname,$username,$password,$dbname,$port);

if($conn->connect_error){
    die('Database connection error: ' . $conn->connect_error);
}
