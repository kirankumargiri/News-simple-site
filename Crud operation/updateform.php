<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="./crudform.css">
</head>
<body>
    <div class="box">
    <form action="update.php" method="get">
    <input type="number" name="id" value="<?php echo $_GET['id'];?>" hidden >

       <div class="list"><label>Image: </label><input name="img" type="url" value="<?php echo $_GET['img']; ?>" ></div>
       <div class="list"><label>Title: </label><input name="title" type="text" value="<?php echo $_GET['title']; ?>" required></div>
       <div class="list"><label>Author: </label><input name="author" type="text" value="<?php echo $_GET['author']; ?>" required></div>
 <div class="list"><label>Content: </label><textarea name="content"  required>"<?php echo $_GET['content']; ?>"</textarea></div>
</div> 
<div class="button"><button type="submit">UPDATE</button></div></form>
</body>
</html>