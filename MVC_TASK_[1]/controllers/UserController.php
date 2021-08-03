<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if (isset($_POST["btn_login"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}else{
			$pass=$_POST["pass"];
		}
		if(!$hasError){
			
			if(authenticateUser($_POST["name"],$_POST["pass"])){
				session_start();
				$_SESSION["loggeduser"] = $_POST["name"];
				header("Location: dashboard.php");
			}
			$err_db = "Name or password is invalid";
		}
	}
	
	function authenticateUser($name,$pass){
		$query ="select * from MVC_TASK_1_Users where name='$name' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	
?>