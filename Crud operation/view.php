<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="./view.css">
</head>
<body>
    <table>
        <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>IMAGE</th>
        <th>AUTHOR</th>
        <th>CONTENT</th>
        <th>EDIT</th>
       </tr>
<?php 
include("./../components.php/connection.php");
$sql="SELECT *FROM FEED";
$res=$conn->query($sql);
if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        ?>
        <tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['img']; ?></td>
<td><?php echo $row['author']; ?></td>
<td><?php echo $row['content']; ?></td>
<td>
    <div class="edit">
    <div class="update"><a href="./updateform.php?id=<?php echo $row['id'] ?>&  title=<?php echo $row['title'] ?>& author=<?php echo $row['author'] ?>& img=<?php echo $row['img'] ?>& content=<?php echo $row['content'] ?>"><i class='far fa-edit' style='font-size:15px'></i></a></div>
    <div class="delete"><a href="./delete.php?id=<?php echo $row['id'];?>"><i class='far fa-trash-alt' style='font-size:15px'></i></a></div>
    </div>
</td>

        </tr> 
        <?php
    }

}
$conn->close();
?>
    </table>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>