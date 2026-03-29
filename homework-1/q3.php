<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">
    FullName:
    <input type="text" name="name"><br>
    Phone No.:
    <input type="number" name="phone"><br>
    Car Brand:
    <select name="car">
      <option value="Toyota">Toyota</option>
      <option value="Ford">Ford</option>
      <option value="Tesla">Tesla</option>
    </select><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>

<?php 

  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $fname=$_POST["name"];
    $phone=$_POST["phone"];
    $car=$_POST["car"];

    echo "Hello, $fname Your phone number is $phone and your perferred car brand is $car";
  }



?>