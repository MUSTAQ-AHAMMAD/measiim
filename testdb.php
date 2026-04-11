<?php
$conn = mysqli_connect("localhost","measimba_user","VC!94cBncQEqkil5","measimba_measiim");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database Connected";
?>