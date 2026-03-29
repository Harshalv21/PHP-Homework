<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
  <div class="container">
  <form action="" method="POST">
  Name:
  <input type="text" name="name"><br>
  Job-Title:
  <input type="text" name="job"><br>
  Email:
  <input type="email" name="email" id=""><br>
  Password:
  <input type="password" name="pass" id=""><br>
  Confirm Password:
  <input type="password" name="cpass" id=""><br>
  <button type="submit">Submit</button>
  </form>
  </div>
</body>
</html>

<?php
  include 'validte_db.php';
  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $Name=$_POST["name"];
    $Job=$_POST["job"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $cpass=$_POST["cpass"];

    $isValid=true;

    if(empty($Name) || empty($email) || empty($pass) || empty($cpass) || empty($Job)){
      echo "<script>alert('Fields cannot be empty')</script>";
      $isValid =false;
    }
    elseif($isValid && $pass !== $cpass){
      echo "<script>alert('Password does not match')</script>";
      $isValid=false;
    }
    elseif($isValid && !filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo "<script>alert('email format not valid')</script>";
      $isValid=false;
    }
    if ($isValid) {

        // Hash password
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = $conn->prepare("INSERT INTO employees(full_name,email,password,job_title) VALUES (?,?,?,?)");
        $sql->bind_param("ssss", $Name, $email, $hashed_pass, $Job);

        if ($sql->execute()) {
            echo "<script>alert('Data Inserted Successfully')</script>";
        }else{
            echo "<script>alert('Error inserting data')</script>";
        }

        $sql->close();
    }
  }
?>