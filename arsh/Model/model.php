
<?php

include_once("model/config.php");

class Model {

 public function getlogin()
 {
  // here goes some hardcoded values to simulate the database
  if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
  
  $username=$_REQUEST['username'];
  $pwd=$_REQUEST['password'];
  
  $con=mysqli_connect('localhost','root','','finalexam');

$sql="select * from loginTable";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
  
   if($username==$row['UserName'] && $pwd==$row['Password']){
    return 'login';
   }
                        else{
    return 'invalid user';
   }
  }
 }
 
}

}
?>
