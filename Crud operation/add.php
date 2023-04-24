<?php
include("./../components.php/connection.php");
$img=$_GET['img'];
$title=$_GET['title'];
$content=$_GET['content'];
$author=$_GET['author'];
$sql="INSERT INTO FEED (id,img,title,content,author)values (null,'$img','$title','$content','$author';);";
$res=$conn->query($sql);
if($res==true){
    header("location:./../index.php");
}
else{
    echo ("INSERTION FAILED");
}
$conn->close();
?>