<?php
include 'controllers/memberController.php';
$x = getMemberActivity($_SESSION["loggeduser"]);
foreach($x as $i){
    $activity= $i['activity'];
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
    <?php include'MemberHeader.php'?>
    <div class="container shadow-lg ">
        <div class="my-5">
            <h1 class="text-center">View Activity</h1>
            <p >The following activities are assigned by the admin under currant packages:</p><span class="text-center"><?php echo $activity?></span>
        </div>
    </div>

    <!-- javascript bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>

</html>