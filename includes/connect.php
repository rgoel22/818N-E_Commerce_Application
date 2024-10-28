<?php
$con = new mysqli('${DBInstanceEndpoint}','admin','${DBPassword}','${DBName}');
if(!$con){
    die(mysqli_error($con));
}
?>