<?php
 $server="localhost";
 $username="root";
 $pass="";
 $dbname="company";

 $conn=new mysqli($server,$username,$pass,$dbname);

  if(!$conn){
    echo"Db not connected";
  }

 ?>