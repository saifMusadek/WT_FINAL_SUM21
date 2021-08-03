<?php
require_once 'models/db_config.php';
$name="";
$err_name="";
$dob="";
$err_dob="";
$credit="";
$err_credit="";
$cgpa="";
$err_cgpa="";
$deptid="";
$err_deptid="";
$rid="";
$err_rid="";
$hasError=false;
if (isset($_POST["btn_add"])){
    if(empty($_POST["name"])){
        $err_name="Name Required";
        $hasError=true;
    }else{
        $name=$_POST["name"];
    }
    if(empty($_POST["dob"])){
        $err_dob="Date of birth Required";
        $hasError=true;
    }else{
        $dob=$_POST["dob"];
    }
    if(empty($_POST["credit"])){
        $err_credit="Credits Required";
        $hasError=true;
    }else{
        $credit=$_POST["credit"];
    }
    if(empty($_POST["cgpa"])){
        $err_cgpa="Cgpa Required";
        $hasError=true;
    }else{
        $cgpa=$_POST["cgpa"];
    }
    if(empty($_POST["deptid"])){
        $err_deptid="Department Id Required";
        $hasError=true;
    }else{
        $deptid=$_POST["deptid"];
    }
    if(!$hasError){
        
        $rs = insertUser($name,$dob,$credit,$cgpa,$deptid);
			//var_dump($rs);
			if($rs === true){
				header("Location: addSuccess.php");
			}
			$err_db = $rs;
    }
}if (isset($_POST["btn_remove"])){
    if(empty($_POST["rid"])){
        $err_rid="Department Id Required";
        $hasError=true;
    }else{
        $rid=$_POST["rid"];
    }
    if(!$hasError){
        
        $rs = deleteUser($rid);
			//var_dump($rs);
			if($rs === true){
				header("Location: addSuccess.php");
			}
			$err_db = $rs;
    }
}

function insertUser($name,$dob,$credit,$cgpa,$deptid){
    $query  = "insert into mvc_task_1_students values (NULL,'$name','$dob','$credit','$cgpa','$deptid')";
    return execute($query);	
}

function deleteUser($rid){
    $query  = "delete from mvc_task_1_students where deptid='$rid';";
    return execute($query);	
}

function getStudents(){
    $query = "select * from mvc_task_1_students";
    $rs = get($query);
    return $rs;
}





?>