<?php
include("./../components.php/connection.php");
$id=$_GET['id'];
$img=$_GET['img'];
$title=$_GET['title'];
$content=$_GET['content'];
$author=$_GET['author'];
$sql="UPDATE feed SET img='$img',title='$title',content='$content',author='$author' where id=$id;";
$res=$conn->query($sql);
if($res==true){
    header("location:./../index.php");
}
else{
    echo ("UPDATE FAILED");
}
?>