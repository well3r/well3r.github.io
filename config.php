<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'hrr5mwqn9zs54rg4.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
define('DB_USERNAME', 'yuzj2q4pgnpwlrpo');
define('DB_PASSWORD', 'vyst6kniys044pa2');
define('DB_NAME', 'csnhyxxyo71hclgt');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>