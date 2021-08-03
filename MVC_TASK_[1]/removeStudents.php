<?php 
include 'controllers/StudentController.php';
?>

<html>
    <head>
        <title>removeStudents</title>
    </head>
    <body>
        <h1>Remove Students</h1>
        <form action="" method="post">
            Enter Department Id of the student: <input type="text" name="rid">
            <input type="submit" name="btn_remove" value="Remove"><span><?php echo$err_rid;?></span>
        </form>
    </body>
</html>