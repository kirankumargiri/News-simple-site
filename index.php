<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSITE</title>
    <link rel="stylesheet" href="./components.php/style.css">
</head>
<body>
    
</body>
</html><div class="header">
    <div class="logo"><img src="https://png.pngtree.com/element_our/sm/20180516/sm_5afc4cd0dcaca.jpg" alt="logo">
</div>
<div class="title"><h1>NEWSITE</h1></div>
<div class="admin"><button><a href="./admin/login.php">ADMIN</a></button></div>
</div>
<div class="news">
    <?php  include_once ("./components.php/news.php"); ?>
</div>
<div class="footer">
 &#169 <?php echo date('y/m/d') ?>
</div>