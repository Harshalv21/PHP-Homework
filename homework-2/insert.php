<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Insert Data</h2>
    <form action="" method="POST">
    Name:
    <input type="text" name="name"><br>
    Position:
    <input type="text" name="pos"><br>
    Salary:
    <input type="number" name="sal"><br>
    <button type="submit">Submit</button>
  </form>
  </div>
</body>
</html>

<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $name=$_POST["name"];
  $Position=$_POST["pos"];
  $Salary=$_POST["sal"];

  $sql=$conn->prepare("INSERT INTO emp_data (Name, Position, Salary) VALUES (?, ?, ?)");
  $sql->bind_param('ssd',$name,$Position,$Salary);

  if($sql->execute()){
    echo "<script>alert('Data Inserted')</script>";
  }
}

?>