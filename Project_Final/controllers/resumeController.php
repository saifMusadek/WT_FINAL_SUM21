<?php 
require_once "models/db_config.php";
$staffId = '';
$err_staffId = '';
$hasError=false;
$status = '';

if(isset($_POST["btn-resume"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['staffId'])){
            $err_staffId = '*This field cannot be empty!';
            $hasError = true;
        }elseif(auntheticateId($_POST['staffId'])!= true){
            $err_staffId = "*This employ does not exist!";
            $hasError = true;
        }else{
            $staffId = $_POST["staffId"];  
        }
    }
    if(!$hasError){
        $status = "no Error";
        $staff = getStaff($_POST['staffId']);
        $url = $staff["resume"];
        $_SESSION["url"] = $url;

        }
        $url ="File Not Found!";
        $status = "error found";
      }
    function auntheticateId($id){
        $query ="select * from trainercredentials where id='$id'";
            $rs = get($query);
            if(count($rs)>0){
                return true;
            }
            return false;     
      }
    function getStaff($id){
	    $query ="select  * from trainercredentials where id='$id'";
		$rs = get($query);
		return $rs[0];
	}
?>