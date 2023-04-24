<?php
include ("./../components.php/connection.php");
$sql="SELECT * FROM access where username=? && password=? limit 1;";
$stat=$conn->prepare($sql);
$stat->bind_param("ss",$username,$pass);
$username=$_POST['username'];
$password=$_POST['password'];
$pass=md5($password);
$stat->execute();
$res=$stat->get_result();
if($res->num_rows>0){
    session_start();
    $_SESSION['loggedin']=true;
    header("location:hidden.php");
}
else {
header("location:register.php");
}
?>