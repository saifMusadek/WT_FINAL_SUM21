<?php include 'controllers/UserController.php';?>

<html>
    <head>
        <title>Login</title> 
    </head>
    <body>

        <form action="" method="post">

        <table>
            <tr>
                <td>
                    Name:
                </td>
                <td><input type="text" name = "name">
                <span><?php echo $err_name?></span></td>
                
            </tr>
            <tr>
            <td>
                    Password:
            </td>
                <td><input type="password" name = "pass"></td>
                <td><span><?php echo $err_pass?></span></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn_login"></td>
            </tr>
            <tr>
                <td>
                    Name: Saifullah
                </td>
            </tr>
            <tr>
                <td>
                    pass: s12345
                </td>
            </tr>
        </table>
        </form>

    </body>
</html>