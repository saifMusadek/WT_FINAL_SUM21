<?php include "controllers/adminController.php";?>


<html>
  <head>
    <title>Admin Login</title>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1><b>Admin Login</b></h1>
      </legend>

      <form align="left" action="" method="POST">
        <table>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="usernameADlog" /></td>
            <td><span><?php echo $err_usernameADlog; ?></span><br /></td>
          </tr>

          <tr>
            <td>Password:</td>
            <td><input type="password" name="passwordAD" /></td>
            <td><span><?php echo $err_passwordAD; ?></span><br /></td>
          </tr>
          <tr><td><br><br><br></td></tr>
          <tr>
            <td>Do not have an account? <a href="AdminSignin.php">Create an account</a></td>
          </tr>
          <tr>
            <td><input type="submit" name="btn_LogIn" value = "LogIn"></td>
          </tr>
        </table>
      </form>
    </fieldset>

    <br>
    
  </body>
</html>
