<html>
<body>
<?php

/*

$conn=new mysqli("localhost","root","");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
else
echo"<br>connection successful";
$sql_query="create database admin";
if(mysqli_query($conn,$sql_query))
echo "<br>database created";
else
echo "<br>could not create database".mysqli_error($conn);

mysqli_close($conn);
if($conn->connect_error)
*/
?>
<?php

/*


$conn=new mysqli("localhost","root","","admin");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
else
echo"<br>connection successful";


$sql="CREATE TABLE register (
username VARCHAR(30) PRIMARY KEY NOT NULL ,
email VARCHAR(30) NOT NULL ,
password VARCHAR(30) NOT NULL )";

if(mysqli_query($conn,$sql))
echo "<br>table created";
else
echo "<br>could not create table".mysqli_error($conn);



*/
?>
<?php

$conn=new mysqli("localhost","root","","admin");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
else
echo"<br>connection successful";
$sql="INSERT INTO register(username,email,password) values('".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."')";
if(mysqli_query($conn,$sql))
//echo"<br>record created successfully";
     header("location:emp_register.html");
else
	echo"<br>could not insert the vlaues".mysqli_error($conn);

?>

<?php

/*


$conn=new mysqli("localhost","root","","admin");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
else
echo"<br>connection successful";


$sql="CREATE TABLE login (
Username VARCHAR(30) PRIMARY KEY NOT NULL ,
Password VARCHAR(30) NOT NULL )";

if(mysqli_query($conn,$sql))
echo "<br>table created";
else
echo "<br>could not create table".mysqli_error($conn);
*/



?>
<?php
/*
$conn=new mysqli("localhost","root","","admin");
if($conn->connect_error)
die("connection failed".$conn->connect_error);
else
echo"<br>connection successful";
$sql="INSERT INTO login(username,password) values('esha','1234')";



if(mysqli_query($conn,$sql))
echo"<br>record created successfully";
     
else
	echo"<br>could not insert the vlaues".mysqli_error($conn);
*/
?>

</body>
</html>