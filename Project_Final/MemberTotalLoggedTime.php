<?php
include 'controllers/memberController.php';
$x = getMemberNotice($_SESSION["loggeduser"]);
foreach($x as $i){
    $notice= $i['notice'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php include'MemberHeader.php'?>
    <div class="container shadow-lg ">
        <div class="my-5">
            <h1 class="text-center">Logged Time</h1>
            <strong><p class="text-center">The following are the number of seconds you have been logged into this account</p></strong><span class="text-center"><?php echo $_SESSION["timeLogged"] = time() - $_SESSION['startTime'];?></span>
        </div>
    </div>

    <!-- javascript bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>

</html>