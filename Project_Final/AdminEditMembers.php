<?php include 'Adminheader.php';
	require_once 'controllers/adminController.php';
    $id = $_GET["id"]; //revieve the id from the url
?>
<html>
        <head>
            <title>Edit Member Profiles</title>
            <link rel="stylesheet" href="styles/AllMembers.css" />
        </head>
            <body>
                <?php include 'AdminLeftSidebar.php'; ?>
                <div class="member-edit">
                    <div class="table-type">    
                    <form action="" method="post" enctype="multipart/form-data">
                    <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?php echo $name;?>"/>
                            <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit" name="edit_MemberName" value="Confirm Edit "
                            class="member-editbutton"  />
                        </td>
                        <td><span><?php echo $err_name; ?></span><br /></td>
                    </tr>

                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="" />
                        <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit"name="edit_MemberUname" value="Confirm Edit "
                            class="member-editbutton"  />
                            
                        </td>
                        <td><span><?php echo $err_username; ?></span><br /></td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass" value="" />
                        <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit"name="edit_MemberPass" value="Confirm Edit "
                            class="member-editbutton"  />
                        </td>
                        <td><span><?php echo $err_password; ?></span><br /></td>
                    </tr>

                    <tr>
                            <td>Gender:</td>
                            <td>
                                <input type="radio" name="gender" value="male" />Male
                                <input type="radio" name="gender" value="female" />Female
                                <input type="hidden" value="<?php echo $id?>" name="id">
                            </td>
                            <td>
                            <input type="submit" name="edit_MemberGender" value="Confirm Edit "
                            class="member-editbutton"  />
                            </td>
                            <td><span><?php echo $err_gender; ?></span><br /></td>
            
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" value="<?php echo $email;?>" />
                        <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit"name="edit_MemberEmail" value="Confirm Edit " 
                            class="member-editbutton" />
                        </td>
                        <td><span><?php echo $err_email; ?></span><br /></td>
                    </tr>

                    <tr>
                        <td>Language:</td>
                        <td><input type="text" name="lang" value="<?php echo $lang;?>" />
                            <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit"name="edit_MemberLang" value="Confirm Edit "  
                            class=member-editbutton"/>
                        </td>
                        <td><span><?php echo $err_lang; ?></span><br /></td>
                    </tr>

                    <tr>
                        <td>DOB:</td>
                        <td><input placeholder="Date/Month/Year" type="text" name="dob" value="<?php echo $dob;?>" />
                            <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit" name="edit_MemberDob" value="Confirm Edit "  
                            class=member-editbutton"/>
                        </td>
                        <td><span><?php echo $err_dob; ?></span><br /></td>
                    </tr>
                
                    <tr>
                        <td>Phone number:</td>
                        <td>
                        <input placeholder="number" type="text" name="number" value="<?php echo $number;?>" />
                        <input type="hidden" value="<?php echo $id?>" name="id">
                        </td>
                        <td>
                            <input type="submit"name="edit_MemberNum" value="Confirm Edit " class="member-editbutton" />
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
                            <input type="submit"name="edit_MemberNid" value="Confirm Edit " class="member-editbutton" />
                        </td>
                        <td><span><?php echo $err_nid; ?></span><br /></td>
                    </tr>
                    </table>
                </form>
                </div>
                </div>
            </body>
</html>