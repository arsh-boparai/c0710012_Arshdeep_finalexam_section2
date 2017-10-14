<?php
$model = new Model();
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$result = $this->model->getlogin($username,$pwd); 

if($result == 'Done')
  {
	header('location:home.php');	
}
  else
  {
   header('location:index.php');	
  }
?>
