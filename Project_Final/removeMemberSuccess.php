<?php 
	require_once "models/db_config.php";
    $id = $_GET["id"]; //revieve the id from the url
    $query ="delete from `membercredentials` where id = $id";
    
    $re = execute($query);
    if($re == true){
        $exp = 'Staff Removed Successfully';
    }else{
        $exp = 'Something Went Wrong';
    }

?>

<html>
    <head>
        <title>Member Removed Successfully</title>
    </head>
    <body>
        <h1><?php echo $exp;?></h1>
        <a href="allMembers.php">[BACK]</a>
    </body>
</html>