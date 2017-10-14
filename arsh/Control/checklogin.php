<?php
$model = new Model();
$user_id=$_POST['user_id'];
$password=$_POST['password'];
$result = $this->model->getlogin($user_id,$password); 

if($result == 'Done')
  {
	header('location:home.php');	
}
  else
  {
   header('location:index.php');	
  }
?>