<?php 
$servername="localhost";
$username="root";
$password="";
$database="newsite";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed");
}

?>