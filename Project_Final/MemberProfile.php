<?php
include 'controllers/memberController.php';

$id = getMemberID($_SESSION["loggeduser"]);

foreach($id as $i){
    $x= $i['id'];
}
$x; //id
$allCredentials = getMembers1($x);
$allCredentials;


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <?php include'MemberHeader.php'?>
    <div class="container my-5">
        <h1>Profile</h1>
        <table class="table table-striped">

            <tbody>
                <?php 
                
                
                foreach($allCredentials as $p){
                
                echo "<tr>";
                    
                    echo"<td>Name ".$_SESSION["loggeduser"].":</td>";
                    echo"<td>".$p["name"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
                    

                    echo"</tr>";
                    echo "<tr>";
                    
                    echo"<td>Username:</td>";
                    echo"<td>".$p["uname"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
                    

                    echo"</tr>";
                    echo "<tr>";
                        
                    echo"<td>Password:</td>";
                    echo"<td>".$p["pass"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
                    

                    echo"</tr>";
                    echo "<tr>";
                            
                    echo"<td>Dob:</td>";
                    echo"<td>".$p["dob"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
                    

                    echo"</tr>";
                    echo "<tr>";
                                
                    echo"<td>gender:</td>";
                    echo"<td>".$p["gender"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
                    

                    echo"</tr>";
                    echo "<tr>";
                            
                    echo"<td>Email:</td>";
                    echo"<td>".$p["email"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';
    

                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>Language:</td>";
                    echo"<td>".$p["lang"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>Street Address:</td>";
                    echo"<td>".$p["str_address"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>City:</td>";
                    echo"<td>".$p["city"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>State:</td>";
                    echo"<td>".$p["state"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>Zip Code:</td>";
                    echo"<td>".$p["zip_code"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>Phone number:</td>";
                    echo"<td>".$p["p_number"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                    echo "<tr>";
                                        
                    echo"<td>Nid:</td>";
                    echo"<td>".$p["nid"]."</td>";
                    echo'<td><a class="btn btn-success" href="MEditMembers.php?id='.$p["id"].'" role="button">Edit</a></td>';


                    echo"</tr>";
                
                }

                ?>
            </tbody>
        </table>

    </div>
    <!-- javascript bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>