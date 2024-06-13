<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='shopping1';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE,3306);
if(!$con){
    die(mysqli_error($con));
}
?>