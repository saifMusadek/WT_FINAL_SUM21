<?php 
include 'controllers/workoutController.php';

?>

<html>
    <head>
        <title>Workout plans</title>
    </head>
    <link rel="stylesheet" href="styles/Workout.css" />
    <body>
        <?php include'AdminHeader.php'?>
        <?php include'AdminLeftSidebar.php'?>
        <div class="workout-plans">
            <div class="main">
                <div class="row-one">
                    <h2>Create Workout</h2>
                </div>
                    <form action="" method="POST">
                        <ul class="wrapper">
                            <li class="form-row">
                            <label for="mId">Enter ID</label>
                            <input for ="mId" type="text" name="mId">
                            <span><?php echo $err_mId?></span>
                            </li>
                            <li class="form-row">
                            <label for="duration">Duration</label>
                            <input for="duration"type="text" name="duration">
                            <span><?php echo $err_duration?></span>
                            </li>
                            <li class="form-row">
                            <label for="wc">Weight Class</label>
                            <input type="wc" name="wc">
                            <span><?php echo $err_wc?></span>
                            </li>
                            <li class="form-row">
                            <label for="tId">Trainer ID</label>
                            <input type="tId" name="tId">
                            <span><?php echo $err_tId?></span>
                            </li>
                            <li class="form-row">
                            <label for="tFe">Trainer Fees</label>
                            <input type="tFe" name="tFe">
                            <span><?php echo $err_tFe?></span>
                            </li>
                            <li class="form-row">
                            <button type="submit" name="btn-Workout">Submit</button>
                            </li>
                        </ul>
                    </form>
                </div>
        </div>
    </body>
</html>