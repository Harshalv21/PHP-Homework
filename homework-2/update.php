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
    <h2>Update Data</h2>
    <form action="" method="POST">
    Id:
    <input type="text" name="id"><br>
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
  $Id=$_POST["id"];
  $Salary=$_POST["sal"];

  $sql=$conn->prepare("update emp_data set Salary=? where Id=?");
  $sql->bind_param('di',$Salary,$Id);

  if($sql->execute()){
    echo "<script>alert('Data Updated')</script>";
  }
}

?>