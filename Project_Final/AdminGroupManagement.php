<?php 
include 'controllers/adminController.php';
?>
<html>
    <head><title>
        Create Group
    </title>
    <link rel="stylesheet" href="styles/createGroup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'Adminheader.php';
            include 'AdminLeftSidebar.php';
        ?>

        <div class="create-group">
            <div class="container my-5">
            <h3>Group Management</h3>
            <table class="table table-striped">
                <form action="" method="post">
                    <tbody>
                        
                        <tr>

                            <td>Member ID 1: </td>
                            <td><input type="text" name="mId1"></td>
                            <td><span><?php echo $err_mId1?></span></td>
                        

                        </tr>
                        <tr>

                            <td>Member ID 2: </td>
                            <td><input type="text" name="mId2"></td>
                            <td><span><?php echo $err_mId2?></span></td>
                        

                        </tr>
                        
                        <tr>

                            
                            <td></td>
                            <td><button class="btn btn-danger" name="btn-group">Create Group</button></td>
                            

                        </tr>

                        <tr>
                            <td><?php echo $activitySuccess;?></td>
                        </tr>
                    </tbody>
                    
                </form>
            </table>

            </div>
        </div>
    </body>
</html>