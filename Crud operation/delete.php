<?php
include("./../components.php/connection.php");
$id=$_GET['id'];
$sql="DELETE FROM feed where id=$id";
$res=$conn->query($sql);
if($res===TRUE){
    header("location:./../index.php");
}
else{
    echo "Deletion failed";
}
$conn->close();
?>