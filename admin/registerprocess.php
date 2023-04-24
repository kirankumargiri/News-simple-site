<?php
include("./../components.php/connection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$hash=md5($password);
$sql="INSERT INTO access (id,Username,Password)values(null,'$username','$hash')";
$res=$conn->query($sql);
if($res==TRUE){
    header("location:login.php");
}
else{
    echo "insertion failed";
}
$conn->close();


?>