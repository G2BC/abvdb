<?php

$hostname_conexao = "localhost";
$database_conexao = "pdtba150_arbovirusdb";
$username_conexao = "pdtba150_arbo";
$password_conexao = "arbodengue";


$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}








?>