<?php
include 'controllers/staffController.php';
$id = getTrainerID($_SESSION["loggeduser"]);
foreach($id as $i){
    $x= $i['id'];
}
$x; //id

$mid = getMemberID($x);

foreach($mid as $j){
    $z = $j['mId'];
}
$_SESSION["WmId"] = $z; 
$_SESSION["TmId"] = $x; 


?>


<html>
    <head>
        <title>Assign Work Out</title>
    </head>
    <body>
        <h1>Assign Work Out</h1>
        <table border="1">
            <form action="" method="post">
                <tr>
                    <td>Member ID:</td>
                    <td><?php echo $z;?></td>
                    
                </tr>
                <tr>
                    <td>Enter body fat:</td>
                    <td><input type="text" name="fat" value="<?php echo $fat;?>"></td>
                    <td><span><?php echo $err_fat?></span></td>
                </tr>
                <tr>
                    <td>Enter body muscle mass:</td>
                    <td><input type="text" name="mmass" value="<?php echo $mmass;?>></td>
                    <td><span><?php echo $err_mmass?></span></td>
                </tr>
                <tr>
                    <td>Enter type of workout:</td>
                    <td><input type="text" name="tywork" value="<?php echo $tywork;?>></td>
                    <td><span><?php echo $err_tywork?></span></td>
                </tr>
                <tr>
                    <td>Enter goal:</td>
                    <td><input type="text" name="goal" value="<?php echo $goal;?>></td>
                    <td><span><?php echo $err_goal?></span></td>
                </tr>
                <tr>
                    <td>Enter weight to work with:</td>
                    <td><input type="text" name="trainingMass" value="<?php echo $trainingMass;?>></td>
                    <td><span><?php echo $err_trainingMass?></span></td>
                </tr>
                <tr>
                    <td>Enter amount of cardio required:</td>
                    <td><input type="text" name="cardio" value="<?php echo $cardio;?>></td>
                    <td><span><?php echo $err_cardio?></span></td>
                </tr>
                <tr>
                    <td>Enter mechines to work with:</td>
                    <td><input type="text" name="mechines" value="<?php echo $mechines;?>></td>
                    <td><span><?php echo $err_mechines?></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="confirm" name="btn-work-out"></td>
                    <td><span><?php echo $success?></span></td>
                </tr>
                
                <td><a href="StaffHomePage.php">[home]</a></td>
            </form>
            
        </table>
    </body>
</html>