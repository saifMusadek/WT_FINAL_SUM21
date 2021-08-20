<?php 
include 'controllers/memberController.php';

$x = getMemberID($_SESSION["loggeduser"]);

foreach($x as $i){
    $id= $i['id'];
}
$id; //id
$y = getWorkOutDetails($id);
foreach($y as $j){
    $tId= $j['tId'];
    $fat= $j['fat'];
    $mmass= $j['mmass'];
    $tywork= $j['tywork'];
    $goal= $j['goal'];
    $trainingMass= $j['trainingMass'];
    $cardio= $j['cardio'];
    $mechines= $j['mechines'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Out Details</title>
    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php include 'MemberHeader.php';?>
    <div class="container">
        <h2 class="my-2">Details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Trainer ID</th>
                    <th scope="col">Fat Composition</th>
                    <th scope="col">Muscle Mass</th>
                    <th scope="col">Type of Workout</th>
                    <th scope="col">Goal</th>
                    <th scope="col">Training Weights</th>
                    <th scope="col">Cardio</th>
                    <th scope="col">Mechines for workout</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $tId;?></th>
                    <td><?php echo $fat?></td>
                    <td><?php echo $mmass?></td>
                    <td><?php echo $tywork?></td>
                    <td><?php echo $goal?></td>
                    <td><?php echo $trainingMass?></td>
                    <td><?php echo $cardio?></td>
                    <td><?php echo $mechines?></td>
                    
                </tr>
                
            </tbody>
        </table>
    </div>
</body>

</html>