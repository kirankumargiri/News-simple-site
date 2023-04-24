<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./form.css">
    <title>Register</title>
</head>
<body>
    <form action="registerprocess.php" method="post">
    <div class="list"><label >USERNAME: </label>
    <input type="text" placeholder="Enter username" name="username">
   </div>
   <div class="list"><label>PASSWORD: </label>
<input type="password" placeholder="Enter the password" name="password">
   </div>
   <div class="button">
   <button type="submit">Register</button>
   </div>
    </form>
</body>
</html>