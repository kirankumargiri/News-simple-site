<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIN</title>
    <link href="./form.css" rel="stylesheet">
</head>
<body>
   <form method="post" action="./loginprocess.php">
   <div class="list"><label >USERNAME: </label>
    <input type="text" placeholder="Enter username" name="username">
   </div>
   <div class="list"><label>PASSWORD: </label>
<input type="password" placeholder="Enter the password" name="password">
   </div>
   <div class="button">
   <div class="reg"><button><a href="./register.php">Register</a></button></div>
<div class="log"><button type="submit">Log In</button></div>
   </div>
   </form> 
</body>
</html>