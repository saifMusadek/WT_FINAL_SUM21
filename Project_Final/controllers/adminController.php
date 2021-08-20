<?php
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
$street_address = "";
$err_street_address="";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip_code = "";
$err_zip_code = "";
$code = "";
$err_code = "";
$dob="";
$err_dob="";
$number = "";
$err_number = "";
$gender = "";
$err_gender = "";
$nid = "";
$err_nid = "";
$action = "";
$err_db="";
$err_adm = "";

$mId = "";
$err_mId ="";
$tid = "";
$err_tId = "";
$pay = "";
$err_pay = "";
$activity = "";
$err_activity = "";
$activitySuccess = "";
$err_mId1 = "";
$err_mId2 = "";
$mId1 ="";
$mId2 = "";
$notice = "";
$err_notice = "";

//login
$usernameADlog = "";
$err_usernameADlog = "";
$passwordAD="";
$err_passwordAD="";
$sampleUser = "AIUB";

$hasError=false;


//------------------------->Admin Signin<----------------------------------
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


      if(empty($_POST['street_address'])){                          // STREET_ADDRESS
        $err_street_address = "This field cannot be empty";
        $hasError = true;
      }else{
        $street_address = $_POST["street_address"];
      }
    
      if(empty($_POST['city'])){                                //CITY
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
      
      if(empty($_POST["zip_code"])){                // ZIP_CODE
        $err_zip_code="Zip code required";
        $hasError = true;
      }elseif(strlen($_POST["zip_code"]) >5){
        $err_zip_code = "Zip code must be 5 digit";
        $hasError = true;
      }elseif(is_numeric($_POST["zip_code"])== false){
        $err_zip_code = "Zip code must me numeric";
        $hasError = true;
      }else{
        $zip_code = $_POST["zip_code"];
      }

      if(empty($_POST["code"])){        // CODE
        $err_code="country code required";
        $hasError = true;
      }elseif(strlen($_POST["code"]) >3 and strlen($_POST["code"]) <1){
        $err_code = "Country code must be 2 or 3 digit";
        $hasError = true;
      }elseif(is_numeric($_POST["code"])== false){
        $err_code = "Country code must me numeric";
        $hasError = true;
      }else{
        $code = $_POST["code"];
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
  
    if(checkOtherAdminExist()){
      $err_adm = "Only one admin allowed";
      $hasError = true;
    }

    if(!$hasError and empty($_POST["password"]) != true){
      $rs = insertUser($name,$username,$password,$email,$lang,$street_address,$city,$state,$zip_code,$code,$number,$nid);
      if($rs === true){
        header("Location: AdminLogin.php");
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
        session_start();
        $_SESSION["loggeduser"] = $_POST["usernameADlog"];
        header("Location: AdminHome.php");

      }
      $err_db = "*Name or password is invalid ";
      
    }else{
      $action = "";
      echo $action."Empty";
    }
  }


  //--------------------->Edit Staff------------------------------

  if (isset($_POST["edit_StaffName"],$_POST["id"])){
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
    }

    if(!$hasError){
      $rs = updateStaffName($name,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }
	}elseif(isset($_POST["edit_StaffUname"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["username"])){                      // USERNAME
        $err_username="Username Required";
        $hasError = true;
      }elseif(strlen($_POST["username"]) < 2){
        $err_username = "Username Must be greater than 2";
        $hasError = true;
      }else{
        $username = $_POST["username"];
      }
    }

    if(!$hasError){
      $rs = updateStaffUname($username,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_StafPass"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
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
  }
    if(!$hasError){
      $rs = updateStaffPass($password,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_StaffEmail"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['email'])){                             //EMAIL
      $err_email = "Email cannot be empty";
      $hasError = true;
    }elseif(validateEmail($_POST['email'])==false){
      $err_email = "Email not written properly (eg. abc@email.com)";
      $hasError = true;
    }else{
      $email = $_POST["email"];
    }
  }
    if(!$hasError){
      $rs = updateStaffEmail($email,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_StaffLang"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['lang'])){                             //LANG
      $err_lang = "Language cannot be empty";
      $hasError = true;
    }else{
      $lang = $_POST["lang"];
    }
  }
    if(!$hasError){
      $rs = updateStaffLang($lang,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_StaffNum"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
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
  }
    if(!$hasError){
      $rs = updateStaffNum($number,$_POST["id"]);
      if($rs === true){
        header("Location: allStaff.php");
      }
      $err_db = $rs;
    }
    

  }elseif(isset($_POST["edit_StaffNid"],$_POST["id"])){
      if($_SERVER["REQUEST_METHOD"] == "POST"){
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
        if(!$hasError){
          $rs = updateStaffNid($nid,$_POST["id"]);
          if($rs === true){
            header("Location: allStaff.php");
          }
          $err_db = $rs;
        }
    }

//--------------------->Edit Members------------------------------------------------
  
  if (isset($_POST["edit_MemberName"],$_POST["id"])){
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
    }

    if(!$hasError){
      $rs = updateMembersName($name,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }
  }elseif(isset($_POST["edit_MemberUname"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["username"])){                      // USERNAME
        $err_username="Username Required";
        $hasError = true;
      }elseif(strlen($_POST["username"]) < 2){
        $err_username = "Username Must be greater than 2";
        $hasError = true;
      }else{
        $username = $_POST["username"];
      }
    }

    if(!$hasError){
      $rs = updateMembersUname($username,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_MemberPass"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["pass"])){                    // PASSWORD
      $err_password="Password Required";
      $hasError = true;
    }elseif(strlen($_POST["pass"]) < 8){
      $err_password = "password must contain atleast 8 characters";
      $hasError = true;
    }elseif(hasPassword($_POST["pass"]) == false){
      $err_password = "password must contain at least 8 character, 1 special character(#),1 number and combination of uppercase and lowercase alphabet.";
      $hasError = true;
    }else{
      $password = $_POST["pass"];
    }
  }
    if(!$hasError){
      $rs = updateMembersPass($password,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_MemberEmail"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['email'])){                             //EMAIL
      $err_email = "Email cannot be empty";
      $hasError = true;
    }elseif(validateEmail($_POST['email'])==false){
      $err_email = "Email not written properly (eg. abc@email.com)";
      $hasError = true;
    }else{
      $email = $_POST["email"];
    }
  }
    if(!$hasError){
      $rs = updateMembersEmail($email,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_MemberLang"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['lang'])){                             //LANG
      $err_lang = "Language cannot be empty";
      $hasError = true;
    }else{
      $lang = $_POST["lang"];
    }
  }
    if(!$hasError){
      $rs = updateMembersLang($lang,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }

  }elseif(isset($_POST["edit_MemberNum"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
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
  }
    if(!$hasError){
      $rs = updateMembersNum($number,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }
    

  }elseif(isset($_POST["edit_MemberNid"],$_POST["id"])){
      if($_SERVER["REQUEST_METHOD"] == "POST"){
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
        if(!$hasError){
          $rs = updateMembersNid($nid,$_POST["id"]);
          if($rs === true){
            header("Location: allMembers.php");
          }
          $err_db = $rs;
        }
    }elseif(isset($_POST["edit_MemberGender"],$_POST["id"])){
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty((isset($_POST["gender"])))){
          $err_gender="Gender Required !";
          $hasError = true;
        }else{
          $gender = $_POST["gender"];
        }
    }
    if(!$hasError){
      $rs = updateMembersGender($nid,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }
  }elseif(isset($_POST["edit_MemberDob"],$_POST["id"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["dob"])){                // PHONE NUMBER
      $err_dob="this field cannot be empty";
      $hasError = true;
    }else{
      $dob = $_POST["dob"];
    }
  }
    if(!$hasError){
      $rs = updateMembersDob($dob,$_POST["id"]);
      if($rs === true){
        header("Location: allMembers.php");
      }
      $err_db = $rs;
    }
    

  }elseif(isset($_POST["btn-activity"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["mId"])){                // PHONE NUMBER
      $err_mId="this field cannot be empty";
      $hasError = true;
    }elseif(validateMember($_POST["mId"]) == false){
      $err_mId ="This member does not exist";
      $hasError = true;
    }else{
      $mId = $_POST["mId"];
    }
    
    if(empty($_POST["activity"])){                // PHONE NUMBER
      $err_activity="this field cannot be empty";
      $hasError = true;
    }else{
      $activity = $_POST["activity"];
    }
  }
    if(!$hasError){
      $rs = insertActivity($mId,$activity);
      if($rs === true){
        $activitySuccess = "Added Successfully";
      }
      $err_db = $rs;
    }
    

  }elseif(isset($_POST["btn-group"])){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["mId1"])){                // PHONE NUMBER
    $err_mId1="this field cannot be empty";
    $hasError = true;
  }elseif(validateMember($_POST["mId1"]) == false){
    $err_mId1 ="This member does not exist";
    $hasError = true;
  }else{
    $mId1 = $_POST["mId1"];
  }
  
  if(empty($_POST["mId1"])){                // PHONE NUMBER
    $err_mId2="this field cannot be empty";
    $hasError = true;
  }elseif(validateMember($_POST["mId2"]) == false){
    $err_mId2 ="This member does not exist";
    $hasError = true;
  }else{
    $mId2 = $_POST["mId2"];
  }
  if(!$hasError){
    $rs = insertGroup($mId1,$mId2);
    if($rs === true){
      $activitySuccess = "Added Successfully";
    }
    $err_db = $rs;
  }
}
  
}elseif(isset($_POST["btn-notice"])){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["mId"])){                // PHONE NUMBER
      $err_mId="this field cannot be empty";
      $hasError = true;
    }elseif(validateMember($_POST["mId"]) == false){
      $err_mId ="This member does not exist";
      $hasError = true;
    }else{
      $mId = $_POST["mId"];
    }

    if(empty($_POST["notice"])){                // PHONE NUMBER
      $err_notice="this field cannot be empty";
      $hasError = true;
    }else{
      $notice = $_POST["notice"];
    }
  }
  if(!$hasError){
    $rs = insertNotice($mId,$notice);
    if($rs === true){
      $activitySuccess = "Added Successfully";
    }
    $err_db = $rs;
  }
}elseif(isset($_POST["btn-payment"])){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["tId"])){                // PHONE NUMBER
      $err_tId="this field cannot be empty";
      $hasError = true;
    }elseif(validateStaff($_POST["tId"]) == false){
      $err_tId ="This trainer does not exist";
      $hasError = true;
    }else{
      $tId = $_POST["tId"];
    }

    if(empty($_POST["pay"])){                // PHONE NUMBER
      $err_pay="this field cannot be empty";
      $hasError = true;
    }else{
      $pay = $_POST["pay"];
    }
  }
  if(!$hasError){
    $rs = insertPayment($tId,$pay);
    if($rs === true){
      $activitySuccess = "Added Successfully";
    }
    $err_db = $rs;
  }
}







  


//------------------------->Defined Functions<-------------------------------------------

  function insertUser($name,$username,$password,$email,$lang,$street_address,$city,$state,$zip_code,$code,$number,$nid){
    $query  = "insert into admincredentials  values (NULL,'$name','$username','$password','$email','$lang','$street_address','$city','$state','$zip_code','$code','$number','$nid')";
    return execute($query);	
  }

  function authenticateUser($uname,$pass){
		$query ="select * from admincredentials where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}

  function auntheticatePass($pass){
    $query ="select * from admincredentials where pass='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
  }

  function auntheticateUname($uname){
    $query ="select * from admincredentials where uname='$uname'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
  }

  function checkOtherAdminExist(){
    $query ="select * from admincredentials;";
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

  function getStaff(){
		$query ="select * from trainercredentials";
		$rs = get($query);
		return $rs;
	}

  function getMembers(){
    $query ="select * from membercredentials";
		$rs = get($query);
		return $rs;
  }

  function updateStaffName($name,$id){
		$query = "update trainercredentials set name= '$name' where id = $id";
		return execute($query);
	}
  function updateStaffUname($username,$id){
		$query = "update trainercredentials set uname= '$username' where id = $id";
		return execute($query);
	}
  function updateStaffPass($password,$id){
		$query = "update trainercredentials set pass= '$password' where id = $id";
		return execute($query);
	}
  
  function updateStaffLang($lang,$id){
		$query = "update trainercredentials set lang= '$lang' where id = $id";
		return execute($query);
	}
  function updateStaffEmail($email,$id){
		$query = "update trainercredentials set email= '$email' where id = $id";
		return execute($query);
	}
  function updateStaffNid($nid,$id){
		$query = "update trainercredentials set nid= '$nid' where id = $id";
		return execute($query);
	}
  function updateStaffNum($number,$id){
		$query = "update trainercredentials set number= '$number' where id = $id";
		return execute($query);
	}


  //===============Members edit function

  function updateMembersName($name,$id){
		$query = "update membercredentials set name= '$name' where id = $id";
		return execute($query);
	}
  function updateMembersUname($username,$id){
		$query = "update membercredentials set uname= '$username' where id = $id";
		return execute($query);
	}
  function updateMembersPass($password,$id){
		$query = "update membercredentials set pass= '$password' where id = $id";
		return execute($query);
	}
  function updateMembersDob($dob,$id){
    $query = "update membercredentials set dob= '$dob' where id = $id";
		return execute($query);
  }
  function updateMembersLang($lang,$id){
		$query = "update membercredentials set lang= '$lang' where id = $id";
		return execute($query);
	}
  function updateMembersGender($gender,$id){
		$query = "update membercredentials set gender= '$gender' where id = $id";
		return execute($query);
	}
  function updateMembersEmail($email,$id){
		$query = "update membercredentials set email= '$email' where id = $id";
		return execute($query);
	}
  function updateMembersNid($nid,$id){
		$query = "update membercredentials set nid= '$nid' where id = $id";
		return execute($query);
	}
  function updateMembersNum($number,$id){
		$query = "update membercredentials set number= '$number' where id = $id";
		return execute($query);
	}
  function validateMember($mId){
    $query ="select * from membercredentials where id=$mId";
    $rs = get($query);
    if(count($rs)>0){
      return true;
    }
    return false;
    }

    function validateStaff($tId){
      $query ="select * from trainercredentials where id=$tId";
      $rs = get($query);
      if(count($rs)>0){
        return true;
      }
      return false;
      }

    function insertActivity($mId, $activity){
      $query = "insert into member_activity values ($mId, '$activity')";
      return execute($query);
    }

    function insertGroup($mId1,$mId2){
    $query = "insert into member_group values(NULL,'$mId1','$mId2')";
    return execute($query);
    }

    function insertNotice($mId,$notice){ 
      $query = "insert into member_notice values(NULL, $mId,'$notice')";
      return execute($query);
    }

    function insertPayment($tId,$pay){
      $query = "insert into staff_payment values(NULL, $tId,'$pay')";
      return execute($query);
    }

?>