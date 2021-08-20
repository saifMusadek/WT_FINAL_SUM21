<?php include"controllers/staffController.php";?>
<html>
  <head>
    <title>StaffSignin</title>
    <script src="js/myScript.js"></script>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1><b>Staff Signin</b></h1>
      </legend>

    
      <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Name:</td>
            <td><input type="text" id = "name" name="name"  value="<?php echo $name;?>"/></td>
            <td><span id = "err_name"><?php echo $err_name; ?></span><br /></td>
          </tr>

          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" id = "username" value="<?php echo $username;?>" /></td>
            <td><span><?php echo $err_username; ?></span><br /></td>
          </tr>

          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" id = "password" value="<?php echo $password;?>" /></td>
            <td><span><?php echo $err_password; ?></span><br /></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirm_password" id = "confirm_password" value="<?php echo $confirm_password;?>" /></td>
            <td><span><?php echo $err_confirm_password; ?></span><br /></td>
          </tr>

          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id = "email" value="<?php echo $email;?>" /></td>
            <td><span><?php echo $err_email; ?></span><br /></td>
          </tr>

          <tr>
            <td>Language:</td>
            <td><input type="text" name="lang" id = "lang" value="<?php echo $lang;?>" /></td>
            <td><span><?php echo $err_lang; ?></span><br /></td>
          </tr>

          
            

          <tr>
            <td>Address:</td>
          
            <td>
              <input placeholder="City" type="text" name="city" id = "city" value="<?php echo $city;?>" /> -
              <input placeholder="State" type="text" name="state" id = "state" value="<?php echo $state;?>" /><br />
            </td>
            <td><span><?php echo $err_city; ?></span><br /></td>
          </tr>

          <tr>
            <td>Phone number:</td>
            <td>
            <input placeholder="number" type="text" name="number" id = "number" value="<?php echo $number;?>" />
            </td>
            <td><span><?php echo $err_number; ?></span><br /></td>
          </tr>
          <tr>
            <td>National ID:</td>
            <td>
              <input placeholder="NID" type="text" name="nid" id = "nid" value="<?php echo $nid;?>"/>
            </td>
            <td><span><?php echo $err_nid; ?></span><br /></td>
          </tr>
          <tr>
              <td>Add Resume: </td>
              <td><input type="file" placeholder="this pc"  name="resume" id = "resume" ></td>
          </tr>
            <tr>
                <td></td>
                    <td>
                        <input type="submit"name="btn_SignIn" value="Register "  /><br><br><br>    Already have an account?<a href="StaffLogin.php">Log in</a>
                    </td>
                    <td><span><?php echo $err_adm;?></span></td>
            </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>

