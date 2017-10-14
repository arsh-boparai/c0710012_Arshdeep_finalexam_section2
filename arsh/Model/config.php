<?php
include_once('databasename.php');

$con = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS login2";
$con->query($sql);
mysqli_close($con);

$con=mysqli_connect($servername, $username, $password, $dbname);
$q="SHOW TABLES LIKE 'login'";
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE login (
          		Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
           	 	UserName VARCHAR(30) NOT NULL,
            	Password VARCHAR(30) NOT NULL)";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);      


$con=mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from login2";
$result=mysqli_query($con,$sql);
if($result->num_rows==0)
{
	$sql="insert into login values (null,'admin','admin@123')";
	$con->query($sql);
	$sql="insert into login values (null,'arsh','123')";
	$con->query($sql);                   
	$sql="insert into login values (null,'guri','1234')";
	$con->query($sql);                   
	mysqli_close($con);  
}
?>