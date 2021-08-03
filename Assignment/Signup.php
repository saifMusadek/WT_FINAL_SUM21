<?php 
require_once 'db_config.php';
$name = "";
$err_name="";
$username = "";
$err_username="";
$email = "";
$err_email="";
$password = "";
$err_password="";
$hasError=false;

if(isset($_POST["sign_up"])){
    if(empty($_POST["name"])){
        $err_name="Name Required";
        $hasError=true;
    }else{
        $name=$_POST["name"];
    }
    if(empty($_POST["username"])){
        $err_username="Username Required";
        $hasError=true;
    }else{
        $username=$_POST["username"];
    }
    if(empty($_POST["password"])){
        $err_password="Password Required";
        $hasError=true;
    }else{
        $password=$_POST["password"];
    }
    if(empty($_POST["email"])){
        $err_email="Email Required";
        $hasError=true;
    }else{
        $email=$_POST["email"];
    }
    if(!$hasError){
        $rs = insertUser($name,$username,$_POST["email"],$_POST["password"]);
        //var_dump($rs);
        if($rs === true){
            header("Location: login.php");
        }
        $err_db = $rs;
        
    }
}

function insertUser($name,$username,$email,$password){
    $query  = "insert into assignment_signincredentials values ('$name','$username','$email','$password',NULL)";
    return execute($query);	
}
?>


<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <h1 align="center">Sign Up</h1>
    <table align="center" border="0">
        <form action="" method="post">
            <tr>
                <td>Enter Name:</td>
                <td>
                <input type="text" name="name" value="<?php echo $name;?>">
			        <span><?php echo $err_name;?></span>
                </td>
            </tr>
            <tr>
                <td>Enter Username:</td>
                <td>
                <input type="text" name="username" value="<?php echo $username;?>">
			        <span><?php echo $err_username;?></span>
                </td>
            </tr>
            <tr>
                <td>Enter Email:</td>
                <td>
                <input type="email" name="email" value="<?php echo $email;?>">
			        <span><?php echo $err_email;?></span>
                </td>
            </tr>
            <tr>
                <td>Enter Password:</td>
                <td>
                <input type="password" name="password" value="<?php echo $password;?>">
			        <span><?php echo $err_password;?></span>
                </td>
            </tr>
            <tr><td>
            <input type="submit" name="sign_up" class="btn btn-success" value="Sign Up">
            </td>
            
            </tr>
            
        </form>

    </table>


</body>


</html>