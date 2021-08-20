<?php 
include 'controllers/memberController.php';

$x = getMemberID($_SESSION["loggeduser"]);

foreach($x as $i){
    $id= $i['id'];
}
$id; //id
$y = getNutritionIntake($id);

if(empty($y) == true){
    foreach($y as $j){
        $tId= "";
        $tname= "";
        $duration= "";
        $wc= "";
        
    }
}else{
    foreach($y as $j){
        $tId= $j['tId'];
        $tname= $j['Protein'];
        $duration= $j['Menu'];
        $wc= $j['CalorieIntake'];
    }  
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php include 'MemberHeader.php';?>
    <div class="container">
        <h2 class="my-2">Nutrition Schedule</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Trainer ID</th>
                    <th scope="col">Protine</th>
                    <th scope="col">Assigned Menu</th>
                    <th scope="col">Daily Calorie Intake</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $tId;?></th>
                    <td><?php echo$tname?></td>
                    <td><?php echo $duration?></td>
                    <td><?php echo $wc?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>

</html>