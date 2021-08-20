<?php
session_start();
require_once "models/db_config.php";
//signIn
$name="";
$err_name="";
$username="";
$err_username="";
$password="";
$err_password = "";
$confirm_password = "";
$err_confirm_password= "";
$email = "";
$err_email = "";
$lang ="";
$err_lang = "";
$success = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$number = "";
$err_number = "";
$nid = "";
$err_nid = "";
$resume= "";
$err_resume = "";
$action = "";
$fat = "";
$err_fat ="";
$mmass = "";
$err_mmass = "";
$tywork = "";
$err_tywork = "";
$goal = "";
$err_goal = "";
$trainingMass = "";
$err_trainingMass ="";
$cardio = "";
$err_cardio = "";
$mechines = "";
$err_mechines = "";
$err_db="";
$err_adm = "";

//login
$usernameADlog = "";
$err_usernameADlog = "";
$passwordAD="";
$err_passwordAD="";
$sampleUser = "AIUB";

$hasError=false;


//------------------------->Staff Signin<----------------------------------
  if (isset($_POST["btn_SignIn"])){
    
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
              
      if(empty($_POST["name"])){                            // NAME
        $err_name="Name Required";
        $hasError = true;

      }elseif(strlen($_POST["name"]) < 2){
        $err_name = "Name Must be greater than 2";
        $hasError = true;
      }elseif(is_numeric($_POST["name"])){
        $err_name = "Name cannot contain numbers";
        $hasError = true;
      }else{
        $name = $_POST["name"];
      }

      if(empty($_POST["username"])){                      // USERNAME
        $err_username="Username Required";
        $hasError = true;
      }elseif(strlen($_POST["username"]) < 2){
        $err_username = "Username Must be greater than 2";
        $hasError = true;
      }else{
        $username = $_POST["username"];
      }

      if(empty($_POST["password"])){                    // PASSWORD
        $err_password="Password Required";
        $hasError = true;
      }elseif(strlen($_POST["password"]) < 8){
        $err_password = "password must contain atleast 8 characters";
        $hasError = true;
      }elseif(hasPassword($_POST["password"]) == false){
        $err_password = "password must contain at least 8 character, 1 special character(#),1 number and combination of uppercase and lowercase alphabet.";
        $hasError = true;
      }else{
        $password = $_POST["password"];
      }

      if(empty($_POST["confirm_password"])){                        // CONFIRM_PASSWORD
        $err_confirm_password = "This field cannot be empty";
        $hasError = true;
      }
      elseif($_POST["confirm_password"] != $_POST["password"] ){      
        $err_confirm_password="Password did not match!";
        $hasError = true;
      }else{
        $confirmed_pass = $_POST["confirm_password"];
      }

      if(empty($_POST['email'])){                             //EMAIL
        $err_email = "Email cannot be empty";
        $hasError = true;
      }elseif(validateEmail($_POST['email'])==false){
        $err_email = "Email not written properly (eg. abc@email.com)";
        $hasError = true;
      }else{
        $email = $_POST["email"];
      }

      if(empty($_POST['lang'])){                             //LANG
        $err_lang = "Language cannot be empty";
        $hasError = true;
      }else{
        $lang = $_POST["lang"];
      }

      if(empty($_POST['city'])){                                //STATE
        $err_city = "this field cannot be empty";
        $hasError = true;
      }else{
        $city = $_POST["city"];
      }

      if(empty($_POST['state'])){                                //STATE
        $err_state = "this field cannot be empty";
        $hasError = true;
      }else{
        $state = $_POST["state"];
      }
      
      if(empty($_POST["number"])){                // PHONE NUMBER
        $err_number="this field cannot be empty";
        $hasError = true;
      }elseif(strlen($_POST["number"]) !=11){
        $err_number = "phone no. must be 11 digits";
        $hasError = true;
      }elseif(is_numeric($_POST["number"])== false){
        $err_number = "phone no. must me numeric";
        $hasError = true;
      }else{
        $number = $_POST["number"];
      }


      if(empty($_POST["nid"])){                // NID
        $err_nid="this field cannot be empty";
        $hasError = true;
      }elseif(strlen($_POST["nid"]) !=11){
        $err_nid = "NID must be 11 digits";
        $hasError = true;
      }elseif(is_numeric($_POST["nid"])== false){
        $err_nid = "NID must me numeric";
        $hasError = true;
      }else{
        $nid = $_POST["nid"];
      }
      
    }

    $fileType = strtolower(pathinfo(basename($_FILES["resume"]["name"]),PATHINFO_EXTENSION));
    $file = "pictures/resumes/".uniqid().".$fileType";
    move_uploaded_file($_FILES["resume"]["tmp_name"],$file);


   
  
  

    if(!$hasError and empty($_POST["password"]) != true){
      $rs = insertUser($name,$username,$password,$email,$lang,$city,$state,$number,$nid,$file);
      if($rs === true){
        header("Location: StaffLogin.php");
      }
      //$action = "SignInComplete.php";
      //echo $action;
      $err_db = $rs;
    }
  }

//------------------------->Admin LogIn<----------------------------------

  if (isset($_POST["btn_LogIn"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["usernameADlog"])){
        $err_usernameADlog = "This field cannot be empty! ";
        $hasError = true;
      }elseif(auntheticateUname($_POST["usernameADlog"]) != true){
        $err_usernameADlog = "No such Username exist!";
        $hasError = true;
      }else{
        $usernameADlog = $_POST["usernameADlog"];
      }

      if(empty($_POST["passwordAD"])){
        $err_passwordAD = "This field cannot be empty! ";
        $hasError = true;
      }elseif(auntheticatePass($_POST["passwordAD"]) != true){
        $err_passwordAD = "Password Incorrect";
        $hasError = true;
      }else{
        $passwordAD = $_POST["passwordAD"];
      }
    }

    if(!$hasError and empty($_POST["passwordAD"]) != true){
      if(authenticateUser($_POST["usernameADlog"],$_POST["passwordAD"])){
        $_SESSION["loggeduser"] = $_POST["usernameADlog"];
        header("Location: StaffHomePage.php");

      }
      $err_db = "*Name or password is invalid ";
      
    }else{
      $action = "";
      echo $action."Empty";
    }
  }elseif(isset($_POST["btn-work-out"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["fat"])){                // NID
        $err_fat="this field cannot be empty";
        $hasError = true;
    }
    if(empty($_POST["mmass"])){                // NID
      $err_mmass="this field cannot be empty";
      $hasError = true;
  }
  if(empty($_POST["tywork"])){                // NID
    $err_tywork="this field cannot be empty";
    $hasError = true;
  }
  if(empty($_POST["goal"])){                // NID
    $err_goal="this field cannot be empty";
    $hasError = true;
  }
  if(empty($_POST["trainingMass"])){                // NID
    $err_trainingMass="this field cannot be empty";
    $hasError = true;
  }
  if(empty($_POST["cardio"])){                // NID
    $err_cardio="this field cannot be empty";
    $hasError = true;
  }
  if(empty($_POST["mechines"])){                // NID
    $err_mechines="this field cannot be empty";
    $hasError = true;
  }

    }
    if(!$hasError){
      $rs = insertWorkDetails($_SESSION["TmId"],$_SESSION["WmId"],$fat,$mmass,$tywork,$goal,$trainingMass,$cardio,$mechines);
      if($rs === true){
        $success = "Added Successfully";
      }
      
    }
  }


//------------------------->Defined Functions<-------------------------------------------

  function insertUser($name,$username,$password,$email,$lang,$city,$state,$number,$nid,$resume){
    $query  = "insert into trainercredentials  values (NULL,'$name','$username','$password','$email','$lang','$city','$state','$number','$nid','$resume')";
    return execute($query);	
  }

  function authenticateUser($uname,$pass){
		$query ="select * from trainercredentials where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

  function auntheticatePass($pass){
    $query ="select * from trainercredentials where pass='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
  }

  function auntheticateUname($uname){
    $query ="select * from trainercredentials where uname='$uname'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
  }


  function hasPassword($em){
    $num=0;
    $num2=0;
    $num3=0;
    $arr2 =[];
    $e = "#";

    if(strlen($em)<8){
        return false;
    }

    if(strpos($em, $e) == false){
        return false;
    }      

    for($i = 0; $i<strlen($em); $i++){
        $arr2[] = $em[$i];
    }


    foreach($arr2 as $e){
        if(is_numeric($e)){
            $num++;
        }
        if(ctype_upper ($e)){
            $num2++;
        }
        if(ctype_lower ($e)){
          $num3++;
      }
    }

    if($num == 0 and $num2 == 0 and $num3 == 0){
        return false;
    }

    return true;
  }

  

  function validateEmail($email){
    $pos_at = strpos($email,"@");
    $pos_dot = strpos($email,".",$pos_at);
    if($pos_dot>$pos_at){
      return true;
    }
    return false;
  }

  function getTrainerID($uname){
    $query = "select id from trainercredentials where uname = '$uname'";
    return get($query);

  }

  function getMemberID($id){
    $query = "select mId from work_out where tId = $id";
    return get($query);
  }

  function insertWorkDetails($tId,$mId,$fat,$mmass,$tywork,$goal,$trainingMass,$cardio,$mechines){
    $query = "insert into workout_detail values ($tId,$mId,'$fat','$mmass','$tywork','$goal','$trainingMass','$cardio','$mechines')";
    return execute($query);
  }
  
?>