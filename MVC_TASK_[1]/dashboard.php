<?php 
    session_start();
    include 'controllers/UserController.php';
?>
<html>
    <head>
        <title>Dashboard</title> 
    </head>
    <body>  
        <h1>Welcome <?php echo $_SESSION["loggeduser"];?></h1>
        <table>
            <li>
                <a href="addStudents.php">[Add Students]</a>
                <a href="removeStudents.php">[Remove Students]</a>
                <a href="editStudents.php">[Edit Students]</a>
                <a href="allStudents.php">[All Students]</a>
                
            </li>
        </table>

        
    </body>
</html>