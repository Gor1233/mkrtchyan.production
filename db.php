<?php 

$server = "sql307.epizy.com";
$username = "epiz_28195448";
$password = "jaumonO1hD4ZjV6";
$dbname = "epiz_28195448_gpstudio";

$conn = mysqli_connect($server, $username, $password, $dbname);

if($conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>