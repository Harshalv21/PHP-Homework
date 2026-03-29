<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="GET">
    Username:
    <input type="text" name="uname"><br>
    Password:
    <input type="password" name="pass"><br>
    Terms and Condition:
    <input type="checkbox" name="tnc"><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"]==="GET"){
    $name=$_GET["uname"];
    $pass=$_GET["pass"];
    $check=isset($_GET["tnc"])?"Agreed":"Not Agreed";

  }
    echo "Welcome, $name You have $check to the Terms and Conditions.";


?>