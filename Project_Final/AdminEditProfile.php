<?php include 'Adminheader.php';
	require_once 'controllers/adminController.php';
    $id = $_GET["id"]; //revieve the id from the url
?>
<html>
    <head>
        <title>Edit Staff Profiles</title>
        <link rel="stylesheet" href="styles/AllStaff.css" />
    <head>
        <body>
            <?php include 'AdminLeftSidebar.php'; ?>
            <div class="staff-edit">
                <div class="table-type">    
                <form action="" method="post" enctype="multipart/form-data">
                <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $name;?>"/>
                        <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit" name="edit_StaffName" value="Confirm Edit "
                        class="staff-editbutton"  />
                    </td>
                    <td><span><?php echo $err_name; ?></span><br /></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="" />
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffUname" value="Confirm Edit "
                        class="staff-editbutton"  />
                        
                    </td>
                    <td><span><?php echo $err_username; ?></span><br /></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="text" value="" />
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffPass" value="Confirm Edit "
                        class="staff-editbutton"  />
                    </td>
                    <td><span><?php echo $err_password; ?></span><br /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $email;?>" />
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffEmail" value="Confirm Edit " 
                        class="staff-editbutton" />
                    </td>
                    <td><span><?php echo $err_email; ?></span><br /></td>
                </tr>

                <tr>
                    <td>Language:</td>
                    <td><input type="text" name="lang" value="<?php echo $lang;?>" />
                        <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffLang" value="Confirm Edit "  
                        class="staff-editbutton"/>
                    </td>
                    <td><span><?php echo $err_lang; ?></span><br /></td>
                </tr>
               
                <tr>
                    <td>Phone number:</td>
                    <td>
                    <input placeholder="number" type="text" name="number" value="<?php echo $number;?>" />
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffNum" value="Confirm Edit " class="staff-editbutton" />
                    </td>
                    <td><span><?php echo $err_number; ?></span><br /></td>
                </tr>
                <tr>
                    <td>National ID:</td>
                    <td>
                    <input placeholder="NID" type="text" name="nid" value="<?php echo $nid;?>"/>
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    </td>
                    <td>
                        <input type="submit"name="edit_StaffNid" value="Confirm Edit " class="staff-editbutton" />
                    </td>
                    <td><span><?php echo $err_nid; ?></span><br /></td>
                </tr>
                </table>
            </form>
            </div>
            </div>
        </body>
</html>