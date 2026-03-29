<?php
include 'db.php';
$result=$conn->query("Select * from emp_data");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <table border="1">
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Position</td>
      <td>Salary</td>
    </tr>
    <?php
      while($row=$result->fetch_assoc()){
    ?>
      <tr>
        <td> <?php echo $row["Id"]  ?></td>
        <td> <?php echo $row["Name"]  ?></td>
        <td> <?php echo $row["Position"]  ?></td>
        <td> <?php echo $row["Salary"]  ?></td>
      </tr>
      <?php } ?>
  </table>
</body>
</html>