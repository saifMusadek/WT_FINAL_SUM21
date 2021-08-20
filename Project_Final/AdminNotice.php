<?php 
include 'controllers/adminController.php';

?>

<html>
    <head>
        <title>Notice</title>
    </head>
    <link rel="stylesheet" href="styles/Notice.css" />
    <body>
        
        <div class="workout-plans">
            <div class="main">
                <div class="row-one">
                    <h2>Create Notice</h2>
                </div>
                    <form action="" method="POST">
                        <ul class="wrapper">
                            <li class="form-row">
                            <label for="mId">Member ID</label>
                            <input for ="mId" type="text" name="mId">
                            <span><?php echo $err_mId?></span>
                            </li>
                            <li class="form-row">
                            <label for="message">Notice</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="notice"></textarea>
                            <span><?php echo $err_notice?></span>
                            </li>
                            <li class="form-row">
                            <button type="submit" name="btn-notice">Submit</button>
                            </li>
                            <li class="form-row">
                            <a href="AdminHome.php">[home]</a>
                            </li>
                            <li class="form-row">
                            <label for="success"><?php $activitySuccess?></label>
                            </li>
                            
                        </ul>
                    </form>
                </div>
        </div>
    </body>
</html>