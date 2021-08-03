<?php
include 'db_config.php';
$username = "";
$err_username="";
$password = "";
$err_password="";
$db="";
$err_db="";
$hasError=false;

if (isset($_POST["Login"])){
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
    if(!$hasError){
        
        if(authenticateUser($_POST["username"],$_POST["password"])){
            session_start();
            $_SESSION["loggeduser"] = $_POST["username"];
            header("Location: Dashboard.php");
        }
        $err_db = "Username password invalid";
    }
}

function authenticateUser($username,$password){
    $query ="select * from assignment_signincredentials where username = '$username' and password = '$password'";
    $rs = get($query);
    if(count($rs)>0){
        return true;
    }
    return false;
    
}


?>


<html>

    <head>
        <title>Login Page</title>
    </head>
    <body>
    <h1 align="center">Login page</h1>
    <table align="center" border="0">
        <form action="" method="post">
            <tr>
                <td>Enter Username:</td>
                <td>
                <input type="text" name="username" value="<?php echo $username;?>">
			        <span><?php echo $err_username;?></span>
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
            <input type="submit" name="Login" class="btn btn-success" value="Login">
            </td>
            
            </tr>
            <span><?php echo $err_db;?></span>
            <a href="Signup.php" >Not registered yet? Sign Up</a>
        </form>

    </table>

    </body>
</html>