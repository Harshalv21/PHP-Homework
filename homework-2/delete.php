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
    <h2>Delete Data</h2>
    <form action="" method="POST" >
    Id
    <input type="text" name="id"><br>
    <button type="submit" class="delete-btn">Submit</button>
  </form>
  </div>
</body>
</html>

<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $Id=$_POST["id"];

  $sql=$conn->prepare("delete from emp_data where Id=?");
  $sql->bind_param('i',$Id);

  if($sql->execute()){
    echo "<script>alert('Data Deleted')</script>";
  }
}
?>