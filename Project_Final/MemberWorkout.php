<?php 
include 'controllers/memberController.php';

$x = getMemberID($_SESSION["loggeduser"]);

foreach($x as $i){
    $id= $i['id'];
}
$id; //id
$y = getWorkOut($id);

if(empty($y) == true){
    foreach($y as $j){
        $tId= "";
        $tname= "";
        $duration= "";
        $wc= "";
        $tFe= "";
    }
}else{
    foreach($y as $j){
        $tId= $j['tId'];
        $tname= $j['tname'];
        $duration= $j['duration'];
        $wc= $j['wc'];
        $tFe= $j['tFe'];
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
        <h2 class="my-2">Work-Out</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Trainer ID</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Weight Class</th>
                    <th scope="col">Trainer Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $tId;?></th>
                    <td><?php echo $tname;?></td>
                    <td><?php echo $duration;?></td>
                    <td><?php echo $wc;?></td>
                    <td><?php echo $tFe;?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>

</html>