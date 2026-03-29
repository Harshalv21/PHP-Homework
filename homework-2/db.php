<?php 

  $server="localhost";
  $username="root";
  $pass="";
  $dbname="employee_db";

  $conn=new mysqli("$server","$username","$pass","$dbname");

  if(!$conn){
    echo "Db not connected";
  }
?>