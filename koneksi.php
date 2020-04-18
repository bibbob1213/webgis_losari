<?php
$servername = "sql306.epizy.com";
$username = "epiz_25567731";
$password = "o6rh8oloXe8";
$dbname = "epiz_25567731_losari";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>