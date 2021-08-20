<?php 
require_once "models/db_config.php";

$mId = "";
$err_mId = "";
$tId = "";
$err_tId = "";
$duration = "";
$err_duration = "";
$tFe = "";
$err_tFe = "";
$wc = "";
$err_wc = "";
$hasError = false;

    if(isset($_POST["btn-Workout"])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["mId"])){                      // USERNAME
                $err_mId="*Member ID Required";
                $hasError = true;
            }elseif(validateMember($_POST["mId"]) == false){
                $err_mId="*Member does not exist";
                $hasError = true;
            }else{
                $mId = $_POST["mId"];
            }

            if(empty($_POST["tId"])){                      // USERNAME
                $err_tId="*Trainer ID Required";
                $hasError = true;
            }elseif(validateTrainer($_POST["tId"]) == false){
                $err_tId="*Trainer does not exist";
                $hasError = true;
            }else{
                $tId = $_POST["tId"];
            }

            if(empty($_POST["duration"])){                      // USERNAME
                $err_duration="* cannot be empty";
                $hasError = true;
            }else{
                $duration = $_POST["duration"];
            }

            if(empty($_POST["wc"])){                      // USERNAME
                $err_wc="* cannot be empty";
                $hasError = true;
            }else{
                $wc = $_POST["wc"];
            }
            if(empty($_POST["tFe"])){                      // USERNAME
                $err_tFe="* cannot be empty";
                $hasError = true;
            }else{
                $tFe = $_POST["tFe"];
            }
        }

        
        if(!$hasError){
            $trainer = getTrainerName($tId);
            
        
        $rs = insertWorkout($mId,$tId,$duration,$tFe,$wc,$trainer["name"]);
        if($rs === true){
            header("Location: WorkoutSuccess.php");
        }
        $err_db = $rs;
        }
    }


        function validateMember($mId){
            $query ="select * from membercredentials where id=$mId";
		    $rs = get($query);
		    if(count($rs)>0){
			    return true;
		    }
		    return false;
        }

        function validateTrainer($tId){
            $query ="select * from trainercredentials where id=$tId";
		    $rs = get($query);
		    if(count($rs)>0){
			    return true;
		    }
		    return false;
        }

        function insertWorkout($mId,$tId,$duration,$tFe,$wc,$tname){
            $query  = "insert into work_out values ($mId,$tId,'$tname','$duration','$wc','$tFe')";
            return execute($query);	
        }

        function getTrainerName($tId){
            $query = "select name from trainercredentials where id = $tId";
            $rs = get($query);
            return $rs[0];
        }
     
