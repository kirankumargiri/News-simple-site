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
    <form action="add.php" method="get">
       <div class="list"><label>Image: </label><input name="img" type="url" placeholder="Enter the url" alt="no image available" ></div>
       <div class="list"><label>Title: </label><input name="title" type="text" placeholder="Enter the title" required></div>
       <div class="list"><label>Author: </label><input name="author" type="text" placeholder="Enter author's name" required></div>
 <div class="list"><label>Content: </label><textarea name="content" placeholder="Enter the content" required></textarea></div>
</div> 
<div class="buuton"><button type="submit">ADD+</button></div>
</form>
</body>
</html>