<?php 
include 'controllers/adminController.php';
?>
<html>
    <head>
        <title>Create Activity</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="activity">
        <div class="container my-5">
        <h3>Assign Activity</h3>
            <table class="table table-striped">
                <form action="" method="post">
                    <tbody>
                        
                        <tr>

                            <td>Member ID: </td>
                            <td><input type="text" name="mId"></td>
                            <td><span><?php echo $err_mId?></span></td>
                        

                        </tr>
                        <tr>

                            <td>Activity: </td>
                            <td><input type="text" name="activity"></td>
                            <td><span class=".text-success"><?php echo $err_activity?></span></td>
                            

                        </tr>
                        
                        <tr>

                            
                            <td></td>
                            <td><button class="btn btn-danger" name="btn-activity">Submit</button></td>
                            <td><a href="AdminHome.php">[Back]</a></button></td>

                        </tr>

                        <tr>
                            <td><?php echo $activitySuccess;?></td>
                        </tr>





                    </tbody>
                    
                </form>
            </table>

        </div>
        
        <!-- javascript bundle -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>