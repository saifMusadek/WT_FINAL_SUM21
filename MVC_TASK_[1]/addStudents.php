<?php 
    include 'controllers/StudentController.php';
?>

<html>
    <head>
        <title>addStudents</title>
    </head>
    <body>
        <h1>Add Students</h1>
        <form action="" method="post">
            <table border="0">
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                    <td><span style="color:red;">*<?php echo $err_name?></span></td>
                </tr>

                <tr>
                    <td>
                        DOB:
                    </td>
                    <td>
                        <input type="text" name="dob">
                    </td>
                    <td><span style="color:red;">*<?php echo $err_dob?></span></td>
                </tr>
                <tr>
                    <td>
                        Credit:
                    </td>
                    <td>
                        <input type="text" name="credit">
                    </td>
                    <td><span style="color:red;">*<?php echo $err_credit?></span></td>
                </tr>
                <tr>
                    <td>
                        CGPA:
                    </td>
                    <td>
                        <input type="text" name="cgpa">
                    </td>
                    <td><span style="color:red;">*<?php echo $err_cgpa?></span></td>
                </tr>
                <tr>
                    <td>
                        Dept_id:
                    </td>
                    <td>
                        <input type="text" name="deptid">
                    </td>
                    <td><span style="color:red;">*<?php echo $err_deptid?></span></td>

                </tr>
                <tr>
                    <td>    </td>
                    <td>
                        <input type="submit" name="btn_add" value="Enter">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>