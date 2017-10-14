<?php
include_once('databasename.php');

$con = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS finalexam";
$con->query($sql);
mysqli_close($con);

$con=mysqli_connect($servername, $username, $password, $dbname);
$q="SHOW TABLES LIKE 'loginTable'";
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE loginTable (
          		Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
           	 	UserName VARCHAR(30) NOT NULL,
            	Password VARCHAR(30) NOT NULL)";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);      


$con=mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from loginTable";
$result=mysqli_query($con,$sql);
if($result->num_rows==0)
{
	$sql="insert into loginTable values (null,'admin','admin@123')";
	$con->query($sql);
	                 
	mysqli_close($con);  
}
?>
