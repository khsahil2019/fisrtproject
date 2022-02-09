<?php
include "config.php";

$data = json_decode(file_get_contents('php://input'), true);
$name=$data["name"];
$rollno=$data["rollno"];
$sql="Insert into table1(name,rollno)values('$name','$rollno');";
$query=$conn->query($sql);
if($query==1)
echo("Success..");
else
echo("Failed..");

 

   ?>