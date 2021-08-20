<?php include "controllers/adminController.php";?>
<html>
  <head>
    <title>AdminSignin</title>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1><b>Admin Signin</b></h1>
      </legend>

    
      <form align="left" action="" method="post">
        <table>
          <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"/></td>
            <td><span><?php echo $err_name; ?></span><br /></td>
          </tr>

          <tr>
            <td>Username:</td>
            <td><input type="text" name="username" value="<?php echo $username;?>" /></td>
            <td><span><?php echo $err_username; ?></span><br /></td>
          </tr>

          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="<?php echo $password;?>" /></td>
            <td><span><?php echo $err_password; ?></span><br /></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirm_password" value="<?php echo $confirm_password;?>" /></td>
            <td><span><?php echo $err_confirm_password; ?></span><br /></td>
          </tr>

          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $email;?>" /></td>
            <td><span><?php echo $err_email; ?></span><br /></td>
          </tr>

          <tr>
            <td>Language:</td>
            <td><input type="text" name="lang" value="<?php echo $lang;?>" /></td>
            <td><span><?php echo $err_lang; ?></span><br /></td>
          </tr>

          <tr>
            <td>Address:</td>
            <td>
              <input
                placeholder="street_address"
                type="text"
                name="street_address"
                value="<?php echo $street_address;?>"
                
              />
            </td>
            <td><span><?php echo $err_street_address; ?></span><br /></td>
          </tr>

          <tr>
            <td></td>
            <td>
              <input placeholder="City" type="text" name="city" value="<?php echo $city;?>" /> -
              <input placeholder="State" type="text" name="state" value="<?php echo $state;?>" /><br />
            </td>
            <td><span><?php echo $err_city; ?></span><br /></td>
          </tr>

          <tr>
            <td></td>
            <td>
              <input
                placeholder="Postal/Zip Code"
                type="text"
                name="zip_code"
                value="<?php echo $zip_code;?>"
              />
            </td>
            <td><span><?php echo $err_zip_code; ?></span><br /></td>
          </tr>

          <tr>
            <td>Phone number:</td>
            <td>
              <input placeholder="code" type="text" name="code" value="<?php echo $code;?>" /> -
              <input placeholder="number" type="text" name="number" value="<?php echo $number;?>" />
            </td>
            <td><span><?php echo $err_number; ?></span><br /></td>
          </tr>
          <tr>
            <td>National ID:</td>
            <td>
              <input placeholder="NID" type="text" name="nid" value="<?php echo $nid;?>"/>
            </td>
            <td><span><?php echo $err_nid; ?></span><br /></td>
          </tr>
          <tr>
                        <td></td>
                        <td>
                            <input type="submit"name="btn_SignIn" value="Register "  /><br><br><br>    Already have an account?<a href="AdminLogin.php">Log in</a>
                        </td>
                        <td><span><?php echo $err_adm;?></span></td>
                    </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>

