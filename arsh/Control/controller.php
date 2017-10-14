<?php
include_once("Model/model.php");

class Controller {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new Model();
    } 
 
 public function invoke()
 {
    $reslt = $this->model->getlogin();     
  	if($reslt == 'login')
  	{
  	 include 'View/home.php';
	 }
 	 else
  	{
   	include 'View/login.php';
 	 }
  
 }
 

}

?>